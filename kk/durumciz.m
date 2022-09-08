clear all, close all
% DÝKKAT:Final ödevinde buradaki A,A1,T,eAdt gibi matrisler yok.
% x(:,i)=x(:i-1)+dt*[... ; ...]
% gibi deðiþiklikler gerekecek. Dosya hold on komutu kullanýmýný göstermektedir.
A1=[0 -2;2 0];
T=[1 -1;-1 2];
A=inv(T)*A1*T;
A=[-9 -17;5 9]
dt=1e-3;t=0:dt:10; x=[t;t];
eAdt=expm(A*dt);
x(:,1)=[0.2;0.3];
for i=2:10001,
    x(:,i)=eAdt*x(:,i-1);
end
figure(1),plot(t,x)
figure(2),plot(x(1,:),x(2,:)),hold on,
x(:,1)=[1;0];
for i=2:10001,
    x(:,i)=eAdt*x(:,i-1);
end
figure(2),plot(x(1,:),x(2,:)),
x(:,1)=[0;1];
for i=2:10001,
    x(:,i)=eAdt*x(:,i-1);
end
figure(2),plot(x(1,:),x(2,:)),
x(:,1)=[0.5;-0.5];
for i=2:10001,
    x(:,i)=eAdt*x(:,i-1);
end
figure(2),plot(x(1,:),x(2,:)),
