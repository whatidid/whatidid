Vh=150;

%olc=[ P1  P2   Ih      n    ]
olc=[346 44 3.76 -528;
     336 49 3.61 -279;
     312 47 3.33 0;
     304 57 3.20 205;
     282 59 2.95 437;
     250 59 2.60 685;
     209 53 2.18 890;
     182 48 1.90 1015;
     126 33 1.31 1205;
     97 22 1.01 1299;
     56 4 0.65 1412;
     42 -2 0.55 1450;
     26 -11 0.48 1500;
     10 -21 0.55 1549;
     -7 -34 0.73 1601;
     -38 -63 1.26 1705;
     -60 -95 1.90 1803;
     -64 -126 2.57 1910;
     -46 -152 3.20 2034;
     -8 -170 3.80 2166
    ];

% HESAPLAMALAR
P1=olc(:,1); P2=olc(:,2); P=P1+P2; Q=sqrt(3)*(P1-P2);
I1=olc(:,3);    % Y baðlý
V1=Vh/sqrt(3);    % Y baðlý
n=olc(:,4);
[I1min,yuksuz]=min(I1); % Senkron hýzýn indisi = yuksuz
PFe=P(yuksuz) ; % Demir kaybi, voltaj sabit olduðu için hep ayný
                % Bakýr kaybý ise yüksüz (senkron hýzda) çalýþmada
                % ihmal edilebilecek kadar küçük.

kilitli=3 % 3. deðer takýmý kilitli rotor durumu olduðu için indisi = kilitli
rT=(P(kilitli)-PFe)/3/I1(kilitli)^2; % Kilitliyken de demir kaybý var ama
                                     % Pm yok. PFe çýkýnca PCu kalýyor.
                                     % Buradan rT=r1+r2' hesaplanýyor.

PCu=3*(rT)*I1.^2;     % Tüm ölçüm takýmlarý için bakýr kaybý akýmýn karesiyle orantýlý
Pm=(P-PCu-PFe);   % Elektromekanik güç
w=2*pi*n/60;
Tm=Pm./w;   % Böyle hesaplanan elektromekanik tork, w=0 için hata veya uyarý verir
            % w=0 için tork formülünden s=1 için hesaplanacak

ws=2*pi*50/2; % Senkron hýz rad/s olarak (4 kutuplu olduðu için 2'ye bölündü)
r2ussu=rT-8; % r1=8 ohm ölçülmüþtü. s=1 için tork formülünde r2ussu gerekiyor.
Tm(kilitli)=3*I1(kilitli)^2*r2ussu / ws % s=1 için tork formülü 
                                        % pay'daki 1-s paydadaki (1-s)ws'inkiyle sadeleþir

figure(1),set(1,'Name','Tm  hýza(w) karþý'),plot(w,Tm,w,0*Tm)
figure(2),set(2,'Name','Q hýza karþý'),plot(n,Q)
fi1=atan2(Q,P)*180/pi; % atan2 fonksiyonu 4 çeyrek bölge için de açýyý doðru hesaplar;
                      % ama önce sanal sonra gerçel kýsým yazýlýr ve sonuç
                      % radyan çýkar. Biz bunu dereceye çevirdik.
figure(3),set(3,'Name','fi1 hýza karþý (I1 ''in V1 ''den GERÝ olma açýsý)'),plot(n,fi1)
