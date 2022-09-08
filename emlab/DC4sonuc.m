Ra=4.4; Rsh=470; Rs=0.15; % ohm
Bp = 0.041602;   % W/rpm
% Seri motor ölçümleri
U=50; % V
n_Ia_s= [
            1955    4.41;
            1700    4.86;
            1560    5.23;
            1354    5.66;
            1200    6.02;
            1030    6.79;
             663    7.65;
             400    8.74];
        
n=n_Ia_s(:,1); Ia=n_Ia_s(:,2);
E=U-(Ra+Rs)*Ia;   w=pi/30*n;
Pm=E.*Ia;    Tm=Pm./w;
Psur=Bp*n;  Pc=Pm-Psur;
Pg=U*Ia;    verim=(Pm>0).*Pc./Pg;
Tsur=Psur./w;     Tc=Tm-Tsur;   % istenirse çizmek için hazýr olsun diye

% Þönt motor
% Rr=0 ölçümleri (Tablo3)
U_sh=200; Rr=0; % V ve ohm
n_Ia_sh1 = [
            1298    9.51;
            1338    8.53;
            1375    7.52;
            1418    6.51;
            1516    5.96;
            1529    5.07;
            1561    4.07;
            1598    3.08;
            1621    2.13;
            1649    1.34;
            1675    0.56;
            1722   -0.39;
            1776   -1.93;
            1835   -3.65;
            1987   -5.64];
        
n_sh1=n_Ia_sh1(:,1); Ia_sh1=n_Ia_sh1(:,2);
E_sh1=U_sh-Ra*Ia_sh1;   w_sh1=pi/30*n_sh1;
Pm_sh1=E_sh1.*Ia_sh1;    Tm_sh1=Pm_sh1./w_sh1;
Psur_sh1=Bp*n_sh1;  Pc_sh1=Pm_sh1-Psur_sh1;
Pg_sh1=U_sh*Ia_sh1+U_sh^2/(Rsh+Rr);    verim_sh1=(Pm_sh1>0).*Pc_sh1./Pg_sh1;
Tsur_sh1=Psur_sh1./w_sh1;     Tc_sh1=Tm_sh1-Tsur_sh1;   % istenirse çizmek için hazýr olsun diye

% Þönt motor
% Rr=100 ölçümleri (Tablo3)
U_sh=200; Rr2=100; % V ve ohm
n_Ia_sh2 = [
            1734    8.0;
            1750    6.98;
            1759    6.23;
            1776    5.14;
            1802    4.17;
            1825    3.11;
            1850    2.26;
            1875    1.17;
            1900    0.51;
            1950   -0.69;
            2000   -1.86;
            2059   -2.45;
            2114   -3.50];
        
n_sh2=n_Ia_sh2(:,1); Ia_sh2=n_Ia_sh2(:,2);
E_sh2=U_sh-Ra*Ia_sh2;   w_sh2=pi/30*n_sh2;
Pm_sh2=E_sh2.*Ia_sh2;    Tm_sh2=Pm_sh2./w_sh2;
Psur_sh2=Bp*n_sh2;  Pc_sh2=Pm_sh2-Psur_sh2;
Pg_sh2=U_sh*Ia_sh2+U_sh^2/(Rsh+Rr2);    verim_sh2=(Pm_sh2>0).*Pc_sh2./Pg_sh2;
Tsur_sh2=Psur_sh2./w_sh2;     Tc_sh2=Tm_sh2-Tsur_sh2;   % istenirse çizmek için hazýr olsun diye

% Çizimler
% Gerilim deðiþimine karþý Tm-w grafikleri (Föydeki Þekil 2 benzeri)
figure(1),h1=plot(w,Tm);axis([0 ceil(max(w)/20)*20 0 ceil(max(Tm)/0.2)*0.2])
set(1,'Name','Seri motor için Tm-w grafiði (Föydeki Þekil 1 benzeri)'),set(h1,'LineWidth',2),grid
xlabel('Hýz (rad/s)'), ylabel('Elektromekanik tork (Nm)');
% Iy deðiþimine karþý Tm
figure(2),,h2=plot([0;Ia],[0;Tm]);axis([0 ceil(max(Ia)) 0 ceil(max(Tm)/0.2)*0.2])
set(2,'Name','Seri motor için Iy-Tm grafiði'),set(h2,'LineWidth',2),grid
xlabel('Akým (A)'), ylabel('Elektromekanik tork (Nm)');

% Verim grafiði
figure(3),h3=plot(w,verim);axis([0 ceil(max([w])/20)*20 0 1.1]);grid
set(3,'Name','Verim grafiði seri motor (yalnýz motor bölgesi için)'),set(h3,'LineWidth',2)
xlabel('Hýz (rad/s)'), ylabel('Verim');
% Uyartým akýmý deðiþimine karþý Tm-w grafikleri (Föydeki Þekil 3 benzeri)
figure(4),h4=plot(w_sh1,Tm_sh1,w_sh2,Tm_sh2);axis([0 ceil(max([w_sh1;w_sh2])/20)*20 floor(min([Tm_sh1;Tm_sh2])/0.20)*0.20 ceil(max([Tm_sh1;Tm_sh2])/0.2)*0.2])
set(4,'Name','Þönt motor için Tm-w grafikleri (Föydeki Þekil 1 benzeri)'),set(h4,'LineWidth',2),grid
xlabel('Hýz (rad/s)'), ylabel('Elektromekanik tork (Nm)');
h=line([0 270],[0 0]);set(h,'Color','red')
text(60,1,'Motor'),text(60,-1,'Jeneratör'),
legend('Reosta = 0 \Omega','Reosta = 100 \Omega','Location','NorthWest')
% Verim grafikleri (yalnýz motor bölgesi için)
figure(5),h5=plot(w_sh1,verim_sh1,w_sh2,verim_sh2);axis([0 ceil(max([w_sh1;w_sh2])/20)*20 0 1.1]);grid
set(5,'Name','Verim grafikleri þönt motor(yalnýz motor bölgesi için)'),set(h5,'LineWidth',2)
xlabel('Hýz (rad/s)'), ylabel('Verim');
legend('Reosta = 0 \Omega','Reosta = 100 \Omega','Location','NorthWest')
