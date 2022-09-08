% Sim�lasyon parametreleri
t0=0; ts=10; dt=0.001; % ilk ve son zamanlar ile zaman ad�m�
x0=[0;0]; % [ia;wr] vekt�r�n�n ba�lang�� �artlar�

% Motor parametreleri
Ra=3.515625; % Armat�r direnci (ohm)
La=1.7578125; % Armat�r end�ktans� (H)
Kb=1.88996494922; % Z�t emk sabiti (Vs/rad) veya tork sabiti (Nm/A)
Bf=0.0028144773234; % S�rt�nme sabiti (Nm.s/rad)
Ji=0.0014072386617; % Eylemsizlik momenti (kg.m^2)
va_anma=250; % Armat�re gerilimi (V)
TL_anma=6.36619772368; % Y�k torku (Nm)

% Hesaplanm�� parametreler
Ra_La=Ra/La; Kb_La=Kb/La; b_La=1/La;
Kb_Ji=Kb/Ji; Bf_Ji=Bf/Ji; b_Ji=1/Ji;

% Boyutland�rma ve ba�lang�� de�erleri
nt=floor(ts/dt)+1; % sim�lasyon ad�m say�s�
t=zeros(1,nt); % �imdilik s�f�r olsun (sat�r)
va=t; TL=t; % �imdilik s�f�r olsunlar (sat�r)
x=[t;t]; % �imdilik s�f�r olsun (i. s�tunu t(i) an�n�n [ia;w] vekt�r�)
t(1)=t0;
x(:,1)=x0;

% D�ng� ba�l�yor
for i=1:nt-1
    t(i+1)=t(i)+dt;
    va(i)=va_anma; % �imdilik aniden tam de�erinde uygulan�yor (denetim yok)
    TL(i)=TL_anma; % �imdilik en ba�ta aniden tam de�erinde uygulan�yor
    x(:,i+1)=x(:,i)+[-Ra_La*x(1,i)-Kb_La*x(2,i)+b_La*va(i);
                      Kb_Ji*x(1,i)-Bf_Ji*x(2,i)-b_Ji*TL(i)]*dt; % Euler metodu
end
% �izdirme
figure(1),plot(t,x(1,:))
set(1,'Name','Ak�m (A)')
ia_denge=mean(x(1,end-500:end))
text(6.5,ia_denge*1.15,['i_a^{denge} = ' num2str(ia_denge) ' A'])
figure(2),plot(t,x(2,:)*30/pi)
set(2,'Name','H�z (devir/dk = rpm)')
nr_denge=mean(x(2,end-500:end))*30/pi
text(6.5,nr_denge*1.15,['n_r^{denge} = ' num2str(nr_denge) ' rpm'])
