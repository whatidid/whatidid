% DC1a
Iu_U=[0 6; 0.1 52;0.15 79;0.2 109;0.25 129; 0.3 147;0.35 160;0.4 171;0.35 162 ; 0.3 151;0.25 137 ; 0.2 116; 0.15 90;0.1 64;0 7]
figure(1),h=plot(Iu_U(:,1),Iu_U(:,2));
axis([0 ceil(max(Iu_U(:,1))/0.2)*0.2 0 ceil(max(Iu_U(:,2))/20)*20])
set(h,'LineWidth',2)
set(1,'Name','DC1a: MIKNATISLANMA egrisi (Uç geriliminin uyartim akimina karsi degisimi)')
%break % Bu satýrý DC1a deneyi sonucu için etkinleþtiriniz, DC1b deneyi
        % sonuçlarý için baþýna % yazýnýz.

% DC1b
Iu=0.5;
n=1500;
Ra=4.45; Ru=470;
Iy_U=[0 197;1.03 190;2.07 187;3.01 181; 4.2 177; 5.15 174; 6.26 170; 7.49 161];
Iy=Iy_U(:,1); U=Iy_U(:,2);
E=U+Ra*Iy;
figure(2),h=plot(Iy,[U,E,Ra*Iy]);
axis([0 ceil(max(Iy)/2)*2 0 ceil(max(E)/20)*20+20])
set(h,'LineWidth',2)
set(2,'Name','DC1b: Yabanci uyartimli dinamo DIS karakteristigi (UÇ geriliminin yük akýmýna karþý degisimi)'),
text(4.5,30,'R_a.I_y')
text(4,165,'U')
text(6,190,'E')
% verim hesabý
Pgiris=E.*Iy+Ru*Iu^2+70; % Sürtünme sabit 70 W alýndý.
Pcikis=U.*Iy;
verim=Pcikis./Pgiris;
figure(3),h2=plot(Iy,verim),
axis([0 ceil(max(Iy)/2)*2 0 1])
set(h2,'LineWidth',2)
set(3,'Name','DC1b: Yabanci uyartimli dinamo VERIMinin yük akimina karsi degisimi')