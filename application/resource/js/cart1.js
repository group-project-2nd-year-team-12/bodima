class quantity{ 
  constructor(clicks)
  {
      this.clicks=clicks;
  }
 increse(x){
   var count=1;
   count=count+clicks;
   document.getElementById(x).innerHTML=count;
}

 decrease(x){
   if(clicks!=1)
   {
       clicks-=1;
       document.getElementById(x).innerHTML=clicks;
   }
}
}
var   clicks=1;
var quan= new quantity(clicks);



