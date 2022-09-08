%% Simülasyon parametreleri
t0=0; tson=5; dt=1e-3;
simulasyon='expm_Adt'; % 'expm_Adt' , 'Euler' , 'Runga-Kutta' 
%% Baþlangýç tanýmlamalarý, boyutlandýrmalar ve baþlangýç deðerleri
t=t0:dt:tson; % Satýr
nt=length(t); % nx motor parametreleri dosyasýnda
%% Motor parametreleri
Ra=0.48; La=0.096; Kb=54/25/pi; Bf=3/25/pi^2; Ji=1.2/25/pi^2;
% Hesaplanan parametreler
A=[-Ra/La  -Kb/La;
    Kb/Ji  -Bf/Ji];     bv=[1/La; 0];   bT=[0; -1/Ji];
nx=2; % Sistem mertebesi
va=zeros(nt,1);
eAdt=expm(A*dt);
cv=(eAdt-eye(2))*inv(A)*bv; % Dersteki va çarpanýný ayrý yazacaðýz.
cT=(eAdt-eye(2))*inv(A)*bT; % Dersteki TL çarpanýný ayrý yazacaðýz.x=zeros(nx,nt); TL=zeros(1,nt);
x0=[0;0]; % [ia; w] sýrasýyla baþlangýç þartlarý
x(:,1)=x0;
va(1)=120; % Nominal voltaj
TL(1)=48/pi; % Nominal tork
%% Döngü baþlýyor
i=1;
while t(i)<tson,
    if strcmp(simulasyon,'expm_Adt'),
       x(:,i+1)=eAdt*x(:,i)+cv*va(i)+cT*TL(i);
    elseif strcmp(simulasyon,'Euler'),
       x(:,i+1)=x(:,i)+(A*x(:,i)+bv*va(i)+bT*TL(i))*dt;
    elseif strcmp(simulasyon,'Runga-Kutta'),
       k1=(A*x(:,i)+bv*va(i)+bT*TL(i))*dt;
       k2=(A*(x(:,i)+k1/2)+bv*va(i)+bT*TL(i))*dt/2;
       k3=(A*(x(:,i)+k2/2)+bv*va(i)+bT*TL(i))*dt/2;
       k4=(A*(x(:,i)+k3)+bv*va(i)+bT*TL(i))*dt;
       x(:,i+1)=x(:,i)+(k1+2*k2+2*k3+k4)/6;
    end
    va(i+1)=120; % Nominal voltaj
    TL(i+1)=48/pi; % Nominal tork
    i=i+1;
end
figure(1), plot(t,x(1,:)), set(1,'Name','ia','Position',[200 100 560 420]),zoom on
figure(2), plot(t,x(2,:)), set(2,'Name','w','Position',[800 100 560 420]),zoom on
