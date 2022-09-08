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
I1=olc(:,3);    % Y ba�l�
V1=Vh/sqrt(3);    % Y ba�l�
n=olc(:,4);
[I1min,yuksuz]=min(I1); % Senkron h�z�n indisi = yuksuz
PFe=P(yuksuz) ; % Demir kaybi, voltaj sabit oldu�u i�in hep ayn�
                % Bak�r kayb� ise y�ks�z (senkron h�zda) �al��mada
                % ihmal edilebilecek kadar k���k.

kilitli=3 % 3. de�er tak�m� kilitli rotor durumu oldu�u i�in indisi = kilitli
rT=(P(kilitli)-PFe)/3/I1(kilitli)^2; % Kilitliyken de demir kayb� var ama
                                     % Pm yok. PFe ��k�nca PCu kal�yor.
                                     % Buradan rT=r1+r2' hesaplan�yor.

PCu=3*(rT)*I1.^2;     % T�m �l��m tak�mlar� i�in bak�r kayb� ak�m�n karesiyle orant�l�
Pm=(P-PCu-PFe);   % Elektromekanik g��
w=2*pi*n/60;
Tm=Pm./w;   % B�yle hesaplanan elektromekanik tork, w=0 i�in hata veya uyar� verir
            % w=0 i�in tork form�l�nden s=1 i�in hesaplanacak

ws=2*pi*50/2; % Senkron h�z rad/s olarak (4 kutuplu oldu�u i�in 2'ye b�l�nd�)
r2ussu=rT-8; % r1=8 ohm �l��lm��t�. s=1 i�in tork form�l�nde r2ussu gerekiyor.
Tm(kilitli)=3*I1(kilitli)^2*r2ussu / ws % s=1 i�in tork form�l� 
                                        % pay'daki 1-s paydadaki (1-s)ws'inkiyle sadele�ir

figure(1),set(1,'Name','Tm  h�za(w) kar��'),plot(w,Tm,w,0*Tm)
figure(2),set(2,'Name','Q h�za kar��'),plot(n,Q)
fi1=atan2(Q,P)*180/pi; % atan2 fonksiyonu 4 �eyrek b�lge i�in de a��y� do�ru hesaplar;
                      % ama �nce sanal sonra ger�el k�s�m yaz�l�r ve sonu�
                      % radyan ��kar. Biz bunu dereceye �evirdik.
figure(3),set(3,'Name','fi1 h�za kar�� (I1 ''in V1 ''den GER� olma a��s�)'),plot(n,fi1)
