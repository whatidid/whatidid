Ra=4.4; Ru=470; Iu=0.30; % ohm ohm A

% S�rt�nme bulma deneyi
n_U_Ia=[            % S�f�r h�z� katm�yoruz, s�f�ra b�lme hatas� olmas�n diye
        130 15  0.5;
        282 31  0.6;
        492 52  0.68;
        665 69  0.72;
        811 84  0.75;
        1011 103  0.78;
        1100 113  0.78;
        1210 123  0.80;
        1307 132  0.81;
        1411 142  0.81;
        1506 151  0.83;
        1613 161  0.83;
        1772 177  0.86;
        1946 193  0.87;
        2135 218  0.88;
        2262 230  0.89
        ];

% Tablo1 doldurma hesaplar�
n=n_U_Ia(:,1); U=n_U_Ia(:,2); Ia=n_U_Ia(:,3);
E=U-Ra*Ia;  w=pi/30*n;  Psur=E.*Ia/2;   Tsur=Psur./w;
B=sum(w.*Tsur)/sum(w.^2); % En k���k kareler y�ntemiyle orijinden ge�en do�ru
disp('S�rt�nme katsay�s�')
disp(['B = ' num2str(B) ' Nm.s/rad   (Tsur = B * w^2  �eklinde kullan�l�r.)'])
Bn=B*pi/30; % Tsur=Bn*n form�l�nde kullan�lacak Bn katsay�s�
disp(['Bn = ' num2str(Bn) ' Nm/rpm   (Tsur = Bn * n^2  �eklinde kullan�l�r.)'])
ws=0:0.1:ceil(max(w)/20)*20; % Bu sadece s�rekli de�i�im e�risi �izmek i�in 
figure(1), h1=plot(w,Psur,'*',ws,B*ws.^2,'-'); axis([0 ceil(max(w)/20)*20 0 ceil(max(Psur)/100)*100])
set(1,'Name','S�rt�nme g�� kayb�: �l��mler(*) ve yakla��k parabol�'),set(h1,'LineWidth',2)
xlabel('H�z (rad/s)'), ylabel('S�rt�nme (Watt)');
legend('�l��m','Yakla��k parabol')
figure(2), h2=plot(w,Tsur,'*',ws,B*ws,'-'); axis([0 ceil(max(w)/20)*20 0 ceil(max(Tsur)/0.2)*0.2])
set(2,'Name','S�rt�nme tork kayb�: �l��mler(*) ve yakla��k do�rusu'),set(h2,'LineWidth',2)
xlabel('H�z (rad/s)'), ylabel('S�rt�nme (Nm)');
legend('�l��m','Yakla��k do�ru','Location','NorthWest')
Bp=sum(n.*Psur)/sum(n.^2); % En k���k kareler y�ntemiyle orijinden ge�en do�ru Psur=Bp*n i�in
disp(['Bp = ' num2str(Bp) ' W/rpm      (Psur = Bp * n  �eklinde kullan�l�r.)'])
disp('En sa�l�kl�s� sonuncusu g�r�n�yor.'),
disp('S�rt�nme torku teorideki gibi h�zla yakla��k orant�l� bulunamad�.')
disp('Fakat s�rt�nme g�� kayb� h�zla yakla��k orant�l� bulundu.')
disp('Anma h�z� civar�nda hepsi yakla��k do�ru sonu� veriyor.')
ns=0:1:ceil(max(n)/200)*200; % Bu sadece s�rekli de�i�im e�risi �izmek i�in
figure(3), h3=plot(n,Psur,'*',ns,Bp*ns,'-'); axis([0 ceil(max(n)/200)*200 0 ceil(max(Psur)/20)*20])
set(3,'Name','S�rt�nme g�� kayb�: �l��mler(*) ve yakla��k do�rusu'),set(h3,'LineWidth',2)
xlabel('H�z (devir/dakika)'), ylabel('S�rt�nme (Watt)');
legend('�l��m','Yakla��k do�ru','Location','NorthWest')

% U1 ve Iu1 i�in yabanc� uyart�ml� motor �l��mleri (Tablo2)
U1=200; Iu1=0.35; % V ve A
n_Ia_2 = [
            1645    10.36;
            1663    9.37;
            1694    8.32;
            1726    7.25;
            1762    6.18;
            1791    5.18;
            1833    4.19;
            1868    3.14;
            1904    2.12;
            1935    1.21;
            1957    0.77;
            2035    0.33;
            2096    -0.9;
            2144    -2.1];
        
n2=n_Ia_2(:,1); Ia2=n_Ia_2(:,2);
E2=U1-Ra*Ia2;   w2=pi/30*n2;
Pm2=E2.*Ia2;    Tm2=Pm2./w2;
Psur2=B*w2.^2;  Pc2=Pm2-Psur2;
Pg2=U1*Ia2+Ru*Iu1^2;    verim2=(Pm2>0).*Pc2./Pg2;
Tsur2=B*w2;     Tc2=Tm2-Tsur2;   % istenirse �izmek i�in haz�r olsun diye


% U2 ve Iu1 i�in yabanc� uyart�ml� motor �l��mleri (Tablo3)
U2=120; Iu1=0.35; % V ve A
n_Ia_3 = [
            1050    8.6;
            1087    7.66;
            1132    6.55;
            1182    5.5;
            1215    4.52;
            1262    3.59;
            1307    2.5;
            1340    1.61;
            1395    0.7;
            1410    0.21;
            1419    -0.5;
            1450    -1.9];
        
n3=n_Ia_3(:,1); Ia3=n_Ia_3(:,2);
E3=U2-Ra*Ia3;   w3=pi/30*n3;
Pm3=E3.*Ia3;    Tm3=Pm3./w3;
Psur3=B*w3.^2;  Pc3=Pm3-Psur3;
Pg3=U2*Ia3+Ru*Iu1^2;    verim3=(Pm3>0).*Pc3./Pg3;
Tsur3=B*w3;     Tc3=Tm3-Tsur3;   % istenirse �izmek i�in haz�r olsun diye

% U1 ve Iu2 i�in yabanc� uyart�ml� motor �l��mleri (Tablo4)
U1=200; Iu2=0.20; % V ve A
n_Ia_4 = [
            1862    9.95;
            1918    8.75;
            1973    7.69;
            2002    6.64;
            2054    5.6;
            2116    4.56;
            2165    3.46;
            2226    2.26;
            2296    1.24;
            2318    0.93;
            2450    -0.2];
        
n4=n_Ia_4(:,1); Ia4=n_Ia_4(:,2);
E4=U1-Ra*Ia4;   w4=pi/30*n4;
Pm4=E4.*Ia4;    Tm4=Pm4./w4;
Psur4=B*w4.^2;  Pc4=Pm4-Psur4;
Pg4=U1*Ia4+Ru*Iu2^2;    verim4=(Pm4>0).*Pc4./Pg4;
Tsur4=B*w4;     Tc4=Tm4-Tsur4;   % istenirse �izmek i�in haz�r olsun diye

% �izimler
% Gerilim de�i�imine kar�� Tm-w grafikleri (F�ydeki �ekil 2 benzeri)
figure(4),h4=plot(w2,Tm2,'b',w3,Tm3,'g');axis([0 ceil(max([w2;w3;w4])/20)*20 floor(min([Tm2;Tm3;Tm4])/0.20)*0.20 ceil(max([Tm2;Tm3;Tm4])/0.2)*0.2])
set(4,'Name','Gerilim de�i�imine kar�� Tm-w grafikleri (F�ydeki �ekil 2 benzeri)'),set(h4,'LineWidth',2),grid
xlabel('H�z (rad/s)'), ylabel('Elektromekanik tork (Nm)');
h=line([0 270],[0 0]);set(h,'Color','red')
text(60,1,'Motor'),text(60,-1,'Jenerat�r'),
text(105,7.5,'U=120V'),text(105,6.8,'Iu=0.35A')
text(155,5.5,'U=200V'),text(155,4.8,'Iu=0.35A')
% Uyart�m ak�m� de�i�imine kar�� Tm-w grafikleri (F�ydeki �ekil 3 benzeri)
figure(5),h5=plot(w2,Tm2,'b',w4,Tm4,'m');axis([0 ceil(max([w2;w3;w4])/20)*20 floor(min([Tm2;Tm3;Tm4])/0.20)*0.20 ceil(max([Tm2;Tm3;Tm4])/0.2)*0.2])
set(5,'Name','Uyart�m ak�m� de�i�imine kar�� Tm-w grafikleri (F�ydeki �ekil 3 benzeri)'),set(h5,'LineWidth',2),grid
xlabel('H�z (rad/s)'), ylabel('Elektromekanik tork (Nm)');
h=line([0 270],[0 0]);set(h,'Color','red')
text(60,1,'Motor'),text(60,-1,'Jenerat�r'),
text(155,5.5,'U=200V'),text(155,4.8,'Iu=0.35A')
text(204,7,'U=200V'),text(209,6.3,'Iu=0.20A')
% Verim grafikleri (yaln�z motor b�lgesi i�in)
figure(6),h6=plot(w2,verim2,'b',w3,verim3,'g',w4,verim4,'m');axis([0 ceil(max([w2;w3;w4])/20)*20 0 1.1]);grid
set(6,'Name','Verim grafikleri (yaln�z motor b�lgesi i�in)'),set(h6,'LineWidth',2)
xlabel('H�z (rad/s)'), ylabel('Verim');
text(110,0.77,'U=120V'),text(110,0.72,'Iu=0.35A')
text(160,0.9,'U=200V'),text(160,0.85,'Iu=0.35A')
text(210,0.9,'U=200V'),text(210,0.85,'Iu=0.20A')
