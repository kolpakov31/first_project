var mon = 15;
var tue = 17;
var a = 'alex';
var b =17;
var c = -365656622;
var d = 5;
//var mas =['alex',17,5,true];//индексный массив
//console.log(mas[1]);

var mas =['alex',17,5,true]; //Индексный
mas[100]='Hello';
var z = 2;
console.log(mas);
var out="";
for (var i=0; i<mas.length; i++){
   if (mas[i]!=undefined) {
      out +=mas[i]+' ';
   }
}
//document.querySelector('#out').innerHTML = out;
//ассоциативный массив объект коллекция
var m2 = {
   "name":"Alex",
    "age":17,
    "kod":5,
    "car":true,
    "hi all" : 666
};
console.log(m2.age);
console.log(m2['age']);
var k ='name';
console.log(m2[k]);
console.log(m2['hi all']);
console.log(m2);

var out2='';
for (var k in m2){
   out2+=k +'---'+m2[k]+'<br>';
}
document.querySelector('#out').innerHTML = out2;

// стандарт JSON
var m ={
   "name":"Sergey",
    "age":44,
    "sex":"male",
    "iin":454,
    "phone":["+38050899999","+7907888844"],
    "email":{
      "gmail":"serg@gmail.com",
        "yahoo":"serg@yahoo.com"
    }
};
console.log(m.email.yahoo);
console.log(m['email']['yahoo']);

//Массив в строку
var str = JSON.stringify(m);
console.log(str);
//строку в массив
console.log(JSON.parse(str));

//AJAX -



