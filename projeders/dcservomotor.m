% Simülasyon parametreleri
t0=0; ts=10; dt=0.001; % ilk ve son zamanlar ile zaman adýmý
x0=[0;0]; % [ia;wr] vektörünün baþlangýç þartlarý

% Motor parametreleri
Ra=3.515625; % Armatür direnci (ohm)
La=1.7578125; % Armatür endüktansý (H)
Kb=1.88996494922; % Zýt emk sabiti (Vs/rad) veya tork sabiti (Nm/A)
Bf=0.0028144773234; % Sürtünme sabiti (Nm.s/rad)
Ji=0.0014072386617; % Eylemsizlik momenti (kg.m^2)
va_anma=250; % Armatüre gerilimi (V)
TL_anma=6.36619772368; % Yük torku (Nm)

% Hesaplanmýþ parametreler
Ra_La=Ra/La; Kb_La=Kb/La; b_La=1/La;
Kb_Ji=Kb/Ji; Bf_Ji=Bf/Ji; b_Ji=1/Ji;

% Boyutlandýrma ve baþlangýç deðerleri
nt=floor(ts/dt)+1; % simülasyon adým sayýsý
t=zeros(1,nt); % þimdilik sýfýr olsun (satýr)
va=t; TL=t; % þimdilik sýfýr olsunlar (satýr)
x=[t;t]; % þimdilik sýfýr olsun (i. sütunu t(i) anýnýn [ia;w] vektörü)
t(1)=t0;
x(:,1)=x0;

% Döngü baþlýyor
for i=1:nt-1
    t(i+1)=t(i)+dt;
    va(i)=va_anma; % Þimdilik aniden tam deðerinde uygulanýyor (denetim yok)
    TL(i)=TL_anma; % Þimdilik en baþta aniden tam deðerinde uygulanýyor
    x(:,i+1)=x(:,i)+[-Ra_La*x(1,i)-Kb_La*x(2,i)+b_La*va(i);
                      Kb_Ji*x(1,i)-Bf_Ji*x(2,i)-b_Ji*TL(i)]*dt; % Euler metodu
end
% Çizdirme
figure(1),plot(t,x(1,:))
set(1,'Name','Akým (A)')
ia_denge=mean(x(1,end-500:end))
text(6.5,ia_denge*1.15,['i_a^{denge} = ' num2str(ia_denge) ' A'])
figure(2),plot(t,x(2,:)*30/pi)
set(2,'Name','Hýz (devir/dk = rpm)')
nr_denge=mean(x(2,end-500:end))*30/pi
text(6.5,nr_denge*1.15,['n_r^{denge} = ' num2str(nr_denge) ' rpm'])
