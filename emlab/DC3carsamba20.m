clear all, close all,
Ra=5; Ru=517;
% Sürtünme bulma deneyi
Iu=0.35;
n_U_Ia=[141 17 0.50;347 40 0.59;547 62 0.66;743 83 0.72;917 102 0.75;1014 113 0.76;1114 124 0.77;1215 135 0.78;1413 157 0.79;1501 166 0.80;1613 179 0.81;1737 193 0.82;1907 212 0.83;2061 228 0.86;2202 244 0.86;2312 256 0.87];
n=n_U_Ia(:,1); U=n_U_Ia(:,2); Ia=n_U_Ia(:,3);
E=U-Ra*Ia; w=n*pi/30; Psur=E.*Ia/2;
%figure(1), set(1,'Name','Sürtünmenin hýza(rpm) karþý deðiþimi'),h=plot(n,Psur);axis([0 2500 0 150]),set(h,'LineWidth',1);
figure(1), set(1,'Name','Sürtünmenin hýza(rad/s) karþý deðiþimi'),h=plot(w,Psur);axis([0 250 0 150]),set(h,'LineWidth',1);
xlabel('açisal hiz(rad/s)'), ylabel('Psür(W)')

% U gerilimine göre deðiþim
Iu1=0.35; U1=200;
n_Ia1=[1420 9.80;1451 8.54;1496 7.53;1531 6.48;1582 5.60;1608 4.56;1655 3.53;1701 2.57;1743 1.74;1789 0.62;1795 0;1917 -1.16;1954 -2.36;2110 -4.84];
n1=n_Ia1(:,1); Ia1=n_Ia1(:,2);
E1=U1-Ra*Ia1; w1=n1*pi/30; Psur1=spline(n,Psur,n1);
Pm1=E1.*Ia1; Tm1=Pm1./w1;
for i=1:length(n1),
    if Ia1(i)>=0, Pg1(i)=U1*Ia1(i)+Ru*Iu1^2; Pc1(i)=Pm1(i)-Psur1(i); verim1(i)=Pc1(i)/Pg1(i); end
    if Ia1(i)<0, Pg1(i)=-Pm1(i)+Psur1(i)+Ru*Iu1^2; Pc1(i)=-U1*Ia1(i); Pc1(i)=Pm1(i)-Psur1(i); verim1(i)=NaN; end
    if verim1(i)<0, verim1(i)=NaN; end
end

Iu2=0.35; U2=150;
n_Ia2=[1050 8;1076 7.04;1127 5.99;1158 4.94;1196 3.99;1217 3.10;1269 2.22;1315 1.21;1360 0.55;1415 0;1460 -1.32;1556 -3;1672 -5.44];
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
n_Ia3=[1723 9.85;1761 8.51;1789 7.52;1847 6.54;1892 5.54;1934 4.58;1990 3.49;2017 2.71;2089 1.52;2137 0.67;2237 0.02;2329 -1.50];
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
text(170,8.8,'I_{u3}=0.25A'),text(130,10.7,'I_{u1}=0.35A'),,text(25,-4,'U=200V sabit')

%figure(4), set(4,'Name','Verim-hýz(rpm) eðrisinin gerilime(U) göre deðiþimi'),h4=plot(n1,verim1,n2,verim2,w3,verim3);axis([0 2500 -1.2 1.2]);line([0 250],[0 0],'LineWidth',1),set(h2,'LineWidth',1);
figure(4), set(4,'Name','Verim-hýz(rpm) eðrisinin gerilime(U) ve uyartým akýmýna(Iu) göre deðiþimi'),h4=plot(w1,verim1,w2,verim2,w3,verim3);axis([0 250 0 1]);set(h2,'LineWidth',1);
%figure(5), set(5,'Name','Verim-hýz(rad/s) eðrisinin uyartým akýmýna(Iu) göre deðiþimi'),h5=plot(n1,verim1,n3,verim3);axis([0 2500 -1.2 1.2]);line([0 250],[0 0],'LineWidth',1),set(h3,'LineWidth',1);
%figure(5), set(5,'Name','Verim-hýz(rad/s) eðrisinin uyartým akýmýna(Iu) göre deðiþimi'),h5=plot(w1,verim1,w3,verim3);axis([0 250 -1.2 1.2]);line([0 250],[0 0],'LineWidth',1), set(h3,'LineWidth',1);
xlabel('açisal hiz(rad/s)'), ylabel('Verim'),title('Sonuçlarin Degerlendirilmesi 6. adim')
text(100,0.5,'U_2=150V'),text(150,0.5,'U_1=200V'),text(187,0.5,'U_3=200V')
text(100,0.43,'I_{u2}=0.35A'),text(148,0.43,'I_{u1}=0.35A'),text(187,0.43,'I_{u3}=0.25A')
text(25,0.9,'Yalniz motor durumlari için')