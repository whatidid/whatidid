clear all, close all,
% Sürtünme bulma deneyi
Iu=0.35; Ra=5; Ru=517;
n_U_Ia=[136 19 0.52; 362 45 0.64; 546 66 .70; 755 89 0.76; 911 107 0.79; 1013 119 0.80; 1106 127 0.81; 1202 138 0.81; 1318 150 0.82; 1414 160 0.82; 1505 172 0.83; 1609 184 0.82; 1733 198 0.83; 1877 215 0.84; 2030 230 0.87; 2174 244 0.87; 2308 259 0.88];
n=n_U_Ia(:,1); U=n_U_Ia(:,2); Ia=n_U_Ia(:,3);
E=U-Ra*Ia; w=n*pi/30; Psur=E.*Ia/2;
% Yukarýsý DC3 deneyinden alýnan sürtünme sonuçlarýdýr

% Seri motor
nIy_seri=[487 9.70;621 9;732 8.56;962 7.58;1167 7.02;1345 6.56;1509 6.17;1787 5.63;1931 5.32;2215 4.91]
Ra=4.75; Rs=0.25; Useri=60;
nseri=nIy_seri(:,1); wseri=nseri*pi/30; Psur_seri=spline(n,Psur,nseri);
Iyseri=nIy_seri(:,2);
Eseri=Useri-(Ra+Rs)*Iyseri;
Pmseri=Eseri.*Iyseri; Tmseri=Pmseri./wseri;
for i=1:length(nseri),
    Pgseri(i)=Useri*Iyseri(i); Pcseri(i)=Pmseri(i)-Psur_seri(i);
    if Pcseri(i)>=0,verim_seri(i)=Pcseri(i)/Pgseri(i);else verim_seri(i)=NaN; end
end
figure(1),set(1,'Name','Seri motor brüt tork(Tm)-hýz(w) eðrisi'),plot(wseri,Tmseri),
axis([0 250 0 2.5]),xlabel('açisal hiz(rad/s)'), ylabel('Brüt tork Tm (Nm)'),
figure(2),set(2,'Name','Seri motor brüt tork(Tm)-yük akýmý(Iy) eðrisi'),plot(Iyseri,Tmseri),
h=line([0 Iyseri(length(nseri))],[0 Tmseri(length(nseri))]),set(h,'LineStyle',':')
axis([0 10 0 2.5]),xlabel('Iy (A)'), ylabel('Brüt tork Tm (Nm)'),



% Þönt motor reosta direnci yokken
Ra=4.75; U=200; Rr=0; Rsh=508; Ru=Rsh+Rr;
n_Ia1=[1451 9.55;1470 8.54;1494 7.49;1528 6.49;1565 5.60;1592 4.67;1629 3.64;1655 2.60;1688 1.71;1716 0.78;1748 0;1789 -1;1822 -2.09;1861 -3;1911 -4.32];
n1=n_Ia1(:,1); Ia1=n_Ia1(:,2);
E1=U-Ra*Ia1; w1=n1*pi/30; Psur1=spline(n,Psur,n1);
Pm1=E1.*Ia1; Tm1=Pm1./w1;
for i=1:length(n1),
    Pg1(i)=U*Ia1(i)+U^2/Ru; Pc1(i)=Pm1(i)-Psur1(i);
    if Pc1(i)>=0,verim1(i)=Pc1(i)/Pg1(i);else verim1(i)=NaN; end
end
% Þönt motor reosta direnci varken
Rr=135; Ru=Rsh+Rr;
n_Ia2=[1742 9.60;1748 8.50;1765 7.56;1783 6.66;1810 5.57;1825 4.61;1857 3.58;1883 2.63;1912 1.56;1937 0.78;1959 0;2015 -1.30;2053 -2.35;2079 -3.15];
n2=n_Ia2(:,1); Ia2=n_Ia2(:,2);
E2=U-Ra*Ia2; w2=n2*pi/30; Psur2=spline(n,Psur,n2);
Pm2=E2.*Ia2; Tm2=Pm2./w2;
for i=1:length(n2),
    Pg2(i)=U*Ia2(i)+U^2/Ru; Pc2(i)=Pm2(i)-Psur2(i);
    if Pc2(i)>=0,verim2(i)=Pc2(i)/Pg2(i);else verim2(i)=NaN; end
end
figure(3), set(3,'Name','Brüt Tork-hýz(rpm) eðrisinin reosta direncine(Rr) göre deðiþimi'),h2=plot(w1,Tm1,w2,Tm2);axis([0 250 -6 12]);line([0 250],[0 0],'LineWidth',1),set(h2,'LineWidth',1);
xlabel('açisal hiz(rad/s)'), ylabel('Brüt tork Tm (Nm)'),
text(140,10.5,'Rr = 0\Omega'), text(170,9,'Rr = 135\Omega')
