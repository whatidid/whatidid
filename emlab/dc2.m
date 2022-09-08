% DC2a
Iy_U=[0 160; 1.02 152;1.96 145;2.89 138;4.10 128; 5.62 111;6.36 104;7.03 93;7.90 74 ; 7.30 52;1.73 0]
n=1500;
Ra=4.45; Rshunt=470; Rr=110;
Ru_kritik=Rshunt+Rr,
Iy=Iy_U(:,1); U=Iy_U(:,2);
Iu=U/Rshunt; Ia=Iy+Iu;
E=U+Ra*Ia;
Pcikis=U.*Iy;
Psur=70; % Sürtünme kaybý 70W sabit alýndý
Pgiris=E.*Ia+Psur;
verim=Pcikis./Pgiris;
figure(1),h1=plot(Iy,U); axis([0 ceil(max(Iy)/2)*2 0 ceil(max(U)/20)*20])
xlabel('I_y (A)'), ylabel('U ( V )')
figure(2),h2=plot(Iy,verim); axis([0 ceil(max(Iy)/2)*2 0 1])
xlabel('I_y (A)'), ylabel('verim')
set(h1,'LineWidth',2),set(h2,'LineWidth',2)
set(1,'Name','DC2a: SONT dinamo uc geriliminin yuk akimina karsi degisimi')
set(2,'Name','DC2a: SONT dinamo veriminin yuk akimina karsi degisimi')

%break % Bu satýrý DC2a deneyi sonucu için etkinleþtiriniz, DC2b deneyi
        % sonuçlarý için baþýna % yazýnýz.

% DC2b
n=1500;
Ra=4.45; Rsh=470; Rs=0.15;
Iy_Uck=[0 156;0.96 143;1.78 135;2.67 120;3.27 104;3.60 81;2.44 39;1.56 15;0.98 0];
Iy_Uek=[0 163;1.02 152;1.98 147;2.80 141;3.63 136;4.95 132;6.21 123;7.06 119;8.06 111];
Iyck=Iy_Uck(:,1); Uck=Iy_Uck(:,2);
Iyek=Iy_Uek(:,1); Uek=Iy_Uek(:,2);
Psur=70; % Sürtünme kaybý 70W sabit alýndý

Ucku=Uck+Rs*Iyck;
Iuck=Ucku/Rsh; Iack=Iyck+Iuck;
Eck=Ucku+Ra*Iack;
Pgirisck=Eck.*Iack+Psur;
Pcikisck=Uck.*Iyck;
verimck=Pcikisck./Pgirisck;
figure(3),h3=plot(Iyck,Uck);hold on,
figure(4),h4=plot(Iyck,verimck);hold on
set(h3,'LineWidth',2,'Color','black'),set(h4,'LineWidth',2,'Color','black')

Ueku=Uek+Rs*Iyek;
Iuek=Ueku/Rsh; Iaek=Iyek+Iuek;
Eek=Ueku+Ra*Iaek;
Pgirisek=Eek.*Iaek+Psur;
Pcikisek=Uek.*Iyek;
verimek=Pcikisek./Pgirisek;
figure(3),h3=plot(Iyek,Uek);hold off,
axis([0 ceil(max([Iyck;Iyek])/2)*2 0 ceil(max([Uck;Uek])/20)*20])
legend('cikarmali','eklemeli')
figure(4),h4=plot(Iyek,verimek);hold off,
axis([0 ceil(max([Iyck;Iyek])/2)*2 0 1])
legend('cikarmali','eklemeli')
set(h3,'LineWidth',2,'Color','blue'),set(h4,'LineWidth',2,'Color','blue')

set(3,'Name','DC2b: Eklemeli ve cikarmali KOMPUND dinamo uc gerilimlerinin yuk akimina karsi degisimi'),
set(4,'Name','DC2b: Eklemeli ve cikarmali KOMPUND dinamo verimlerin yuk akimina karsi degisimi'),
% text(4.5,30,'R_a.I_y')
% text(4,165,'U')
% text(6,190,'E')
% % verim hesabý
% Pgiris=E.*Iy+Ru*Iu^2+70; % Sürtünme sabit 70 W alýndý.
% Pcikis=U.*Iy;
% verim=Pcikis./Pgiris;
% figure(3),h2=plot(Iy,verim),
% set(h2,'LineWidth',2)
% set(3,'Name','DC1b: Verimin yük akýmýna karþý deðiþimi')