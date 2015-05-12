<!--js for jakat calculator-->

<!-- Aim: Write HTML Code Using JavaScript Functions To Perform Basic Arithmetic Operations. -->  
<!-- 1. Take Two numbers from user say 'Number 1' and 'Number 2'. -->  
<!-- 2. Perform Addition, Subtraction, Multiplication, Division and Modulus. -->  
<!-- 3. Result must be displayed on same HTML Page when respective button is clicked. -->  
<!-- 4. Use <input> tag (HTML Forms Concept) with onclick.-->  
<!-- 5. Call individual Javascript Function, put them inside <head> tag only.-->  
<!-- 6. Javascript Tutorial/Code For Computer Science Students. -->  
<!-- 7. Tested and Written By (c) Gaurav Akrani. -->

function zakat(){  
a=Number(document.calculator.number1.value);   
b=a*2.5/100;  
c=Number(document.calculator.number2.value);   
d=c*2.5/100; 
e=Number(document.calculator.number3.value);   
f=e/10; 
g=Number(document.calculator.number4.value);   
h=g/20; 
i=Number(document.calculator.number5.value);   
j=i*2.5/100; 
k=Number(document.calculator.number6.value);   
l=k*2.5/100; 
m=Number(document.calculator.number7.value);   
n=m*2.5/100; 
o=Number(document.calculator.number8.value);   
p=o*2.5/100; 
q=Number(document.calculator.number9.value);   
r=q*2.5/100; 
s=Number(document.calculator.number9.value);   
t=s*2.5/100; 
document.calculator.total.value=a+c+e+g+i+k+m+o+q;
u=(document.calculator.total.value);
if(u>=374774){
document.calculator.jakat.value=b+d+f+h+j+l+n+p+r; 
}
else{
document.calculator.jakat.value=0;
}
}  