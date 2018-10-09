function summation(){
  var sum = 0;
  while(sco != 0){
    var sco = prompt("ป้อนตัวเลข(0 คือเลิกทำ) : ")
    sum+=parseInt(sco);
    document.getElementById("demo").innerHTML = "ผลรวม ="+sum;
  }
}
