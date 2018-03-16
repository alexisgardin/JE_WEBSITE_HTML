var options = [
  {selector: '.projectFactsWrap', offset: 150, callback: function() {
    $('#number1').jQuerySimpleCounter({end: 12,duration: 3000});
    $('#number2').jQuerySimpleCounter({end: 55,duration: 3000});
    $('#number3').jQuerySimpleCounter({end: 359,duration: 2000});
  } },
];
Materialize.scrollFire(options);
