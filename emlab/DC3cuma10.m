clear all, close all,
Ra=5; Ru=517;
% Sürtünme bulma deneyi
Iu=0.35;
n_U_Ia=[136 19 0.52; 362 45 0.64; 546 66 .70; 755 89 0.76; 911 107 0.79; 1013 119 0.80; 1106 127 0.81; 1202 138 0.81; 1318 150 0.82; 1414 160 0.82; 1505 172 0.83; 1609 184 0.82; 1733 198 0.83; 1877 215 0.84; 2030 230 0.87; 2174 244 0.87; 2308 259 0.88];
n=n_U_Ia(:,1); U=n_U_Ia(:,2); Ia=n_U_Ia(:,3);
E=U-Ra*Ia; w=n*pi/30; Psur=E.*Ia/2;
%figure(1), set(1,'Name','Sürtünmenin hýza(rpm) karþý deðiþimi'),h=plot(n,Psur);axis([0 2500 0 150]),set(h,'LineWidth',1);
figure(1), set(1,'Name','Sürtünmenin hýza(rad/s) karþý deðiþimi'),h=plot(w,Psur);axis([0 250 0 150]),set(h,'LineWidth',1);
xlabel('açisal hiz(rad/s)'), ylabel('Psür(W)')

% U gerilimine göre deðiþim
Iu1=0.35; U1=200;
n_Ia1=[1404 10.62; 1437 9.56; 1454 8.48; 1497 7.5;1553 6.51; 1587 5.48; 1621 4.59; 1666 3.62; 1710 2.59; 1762 1.67; 1794 0.62; 1860 0; 1933 -1.08; 1998 -2.0; 2040 -3.12; 2088 -4.24];
n1=n_Ia1(:,1); Ia1=n_Ia1(:,2);
E1=U1-Ra*Ia1; w1=n1*pi/30; Psur1=spline(n,Psur,n1);
Pm1=E1.*Ia1; Tm1=Pm1./w1;
for i=1:length(n1),
    if Ia1(i)>=0, Pg1(i)=U1*Ia1(i)+Ru*Iu1^2; Pc1(i)=Pm1(i)-Psur1(i); verim1(i)=Pc1(i)/Pg1(i); end
    if Ia1(i)<0, Pg1(i)=-Pm1(i)+Psur1(i)+Ru*Iu1^2; Pc1(i)=-U1*Ia1(i); Pc1(i)=Pm1(i)-Psur1(i); verim1(i)=NaN; end
    if verim1(i)<0, verim1(i)=NaN; end
end

Iu2=0.35; U2=150;
n_Ia2=[1060 8.0; 1090 7.01; 1135 6.09; 1169 5.0; 1214 4.12; 1251 3.03; 1300 2.18; 1335 1.22; 1377 0.56; 1428 0.0; 1456 -1.0; 1526 -2.05; 1570 -3.09; 1611 -4.08];
n2=n_Ia2(:,1); Ia2=n_Ia2(:,2);
E2=U2-Ra*Ia2; w2=n2*pi/30; Psur2=spline(n,Psur,n2);
Pm2=E2.*Ia2; Tm2=Pm2./w2;
for i=1:length(n2),
    if Ia2(i)>=0, Pg2(i)=U2*Ia2(i)+Ru*Iu2^2; Pc2(i)=Pm2(i)-Psur2(i); verim2(i)=Pc2(i)/Pg2(i); end
    if Ia2(i)<0, Pg2(i)=-Pm2(i)+Psur2(i)+Ru*Iu2^2; Pc2(i)=-U2*Ia2(i); Pc2(i)=Pm2(i)-Psur2(i); verim2(i)=NaN; end
    if verim2(i)<0, verim2(i)=NaN; end
end
%figure(2), set(2,'Name','Brüt Tork-hýz(rpm) eðrisinin gerilime(U) göre deðiþimi'),h2=plot(n1,Tm1,n2,Tm2);axis([0 2500 -6 12]);line([0 250],[0 0],'LineWidth',1),set(h2,'LineWidth',1);
figure(2), set(2,'Name','Brüt Tork-hýz(rpm) eðrisinin gerilime(U) göre deðiþimi'),h2=plot(w1,Tm1,w2,Tm2);axis([0 250 -6 12]);line([0 250],[0 0],'LineWidth',1),set(h2,'LineWidth',1);
xlabel('açisal hiz(rad/s)'), ylabel('Brüt tork Tm (Nm)'),title('Sonuçlarin Degerlendirilmesi 7. adim')
text(95,8.7,'U_2=150V'),text(136,10.7,'U_1=200V'),text(25,-4,'I_u=0.35A sabit'),text(140,4,'Motor'),text(170,-3,'Jeneratör')
text(140,3,'bölgesi'),text(175,-4,'bölgesi')

Iu3=0.25; U3=200;
n_Ia3=[1692 10.68; 1726 9.47; 1752 8.51; 1794 7.58; 1834 6.56; 1887 5.54; 1930 4.58; 1990 3.42; 2050 2.54; 2096 1.58; 2150 0.66; 2241 0.0; 2285 -0.86; 2348 -1.76];
n3=n_Ia3(:,1); Ia3=n_Ia3(:,2);
E3=U3-Ra*Ia3; w3=n3*pi/30; Psur3=spline(n,Psur,n3);
Pm3=E3.*Ia3; Tm3=Pm3./w3;
for i=1:length(n3),
    if Ia3(i)>=0, Pg3(i)=U3*Ia3(i)+Ru*Iu3^2; Pc3(i)=Pm3(i)-Psur3(i); verim3(i)=Pc3(i)/Pg3(i); end
    if Ia3(i)<0, Pg3(i)=-Pm3(i)+Psur3(i)+Ru*Iu3^2; Pc3(i)=-U3*Ia3(i); Pc3(i)=Pm3(i)-Psur3(i); verim3(i)=NaN; end
    if verim3(i)<0, verim3(i)=NaN; end
end
%figure(3), set(3,'Name','Brüt Tork-hýz(rad/s) eðrisinin uyartým akýmýna(Iu) göre deðiþimi'),h3=plot(n1,Tm1,n3,Tm3);axis([0 2500 -6 12]);line([0 250],[0 0],'LineWidth',1),set(h3,'LineWidth',1);
figure(3), set(3,'Name','Brüt Tork-hýz(rad/s) eðrisinin uyartým akýmýna(Iu) göre deðiþimi'),h3=plot(w1,Tm1,w3,Tm3);axis([0 250 -6 12]);line([0 250],[0 0],'LineWidth',1), set(h3,'LineWidth',1);
xlabel('açisal hiz(rad/s)'), ylabel('Brüt tork Tm (Nm)'),title('Sonuçlarin Degerlendirilmesi 8. adim')
text(170,9.4,'I_{u3}=0.25A'),text(130,10.9,'I_{u1}=0.35A'),,text(25,-4,'U=200V sabit')

%figure(4), set(4,'Name','Verim-hýz(rpm) eðrisinin gerilime(U) göre deðiþimi'),h4=plot(n1,verim1,n2,verim2,w3,verim3);axis([0 2500 -1.2 1.2]);line([0 250],[0 0],'LineWidth',1),set(h2,'LineWidth',1);
figure(4), set(4,'Name','Verim-hýz(rpm) eðrisinin gerilime(U) ve uyartým akýmýna(Iu) göre deðiþimi'),h4=plot(w1,verim1,w2,verim2,w3,verim3);axis([0 250 0 1]);set(h2,'LineWidth',1);
%figure(5), set(5,'Name','Verim-hýz(rad/s) eðrisinin uyartým akýmýna(Iu) göre deðiþimi'),h5=plot(n1,verim1,n3,verim3);axis([0 2500 -1.2 1.2]);line([0 250],[0 0],'LineWidth',1),set(h3,'LineWidth',1);
%figure(5), set(5,'Name','Verim-hýz(rad/s) eðrisinin uyartým akýmýna(Iu) göre deðiþimi'),h5=plot(w1,verim1,w3,verim3);axis([0 250 -1.2 1.2]);line([0 250],[0 0],'LineWidth',1), set(h3,'LineWidth',1);
xlabel('açisal hiz(rad/s)'), ylabel('Verim'),title('Sonuçlarin Degerlendirilmesi 6. adim')
text(100,0.5,'U_2=150V'),text(150,0.5,'U_1=200V'),text(187,0.5,'U_3=200V')
text(100,0.43,'I_{u2}=0.35A'),text(148,0.43,'I_{u1}=0.35A'),text(187,0.43,'I_{u3}=0.25A')
text(25,0.9,'Yalniz motor durumlari için')