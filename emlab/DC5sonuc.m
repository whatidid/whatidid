Ra=4.4; Rsh=470; Rs=0.15; % ohm
B=0.0025;   % Nm.s/rad
Bp = 0.041602;   % W/rpm
% Eklemeli kompund ölçümleri
Ue=200; % V
n_Ia_e= [
            1603    0.76;
            1571    1.57;
            1532    2.37;
            1495    3.20;
            1454    4.23;
            1405    5.31;
            1362    6.42;
            1330    7.32;
            1287    8.48;
            1249    9.52];
        
ne=n_Ia_e(:,1); Iae=n_Ia_e(:,2);
Ee=Ue-(Ra+Rs)*Iae;   we=pi/30*ne;
Pme=Ee.*Iae;    Tme=Pme./we;
Psure=Bp*ne;  Pce=Pme-Psure;
Pge=Ue*(Iae+(Ue/Rsh));    verime=(Pme>0).*Pce./Pge;
Tsure=Psure./we;     Tce=Tme-Tsure;   % istenirse çizmek için hazýr olsun diye

% Çýkarmalý kompund ölçümleri
Uc=200; % V
n_Ia_c= [
            1680    0.70;
            1656    1.55;
            1627    2.47;
            1597    3.52;
            1576    4.45;
            1544    5.52;
            1526    6.54;
            1498    7.52;
            1482    8.48;
            1325    10.81];
        
nc=n_Ia_c(:,1); Iac=n_Ia_c(:,2);
Ec=Uc-(Ra-Rs)*Iac;   wc=pi/30*nc;
Pmc=Ec.*Iac;    Tmc=Pmc./wc;
Psurc=Bp*nc;  Pcc=Pmc-Psurc;
Pgc=Uc*(Iac+(Uc/Rsh));    verimc=(Pmc>0).*Pcc./Pgc;
Tsurc=Psure./wc;     Tcc=Tmc-Tsurc;   % istenirse çizmek için hazýr olsun diye

% Çizimler
figure(1),h1=plot(we,Tme,wc,Tmc);axis([0 ceil(max([we;wc])/20)*20 floor(min([Tme;Tmc])/0.20)*0.20 ceil(max([Tme;Tmc])/0.2)*0.2])
set(1,'Name','Tm-w grafikleri (Föydeki Þekil 1 benzeri)'),set(h1,'LineWidth',2),grid
xlabel('Hýz (rad/s)'), ylabel('Elektromekanik tork (Nm)');
legend('eklemeli','çýkarmalý','Location','Northwest');

figure(2),h2=plot(we,verime,wc,verimc);axis([0 ceil(max([we;wc])/20)*20 0 1.1]);grid
set(2,'Name','Verim grafikleri'),set(h2,'LineWidth',2)
xlabel('Hýz (rad/s)'), ylabel('Verim');
legend('eklemeli','çýkarmalý','Location','Northwest');
