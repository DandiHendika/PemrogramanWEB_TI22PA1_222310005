function hitung() {
    var n = parseInt(document.fform.n.value);
  
    var faktorial = 1;
    for (var i = 1; i <= n; i++) {
        faktorial *= i;
    }

    var deret = 0;
    for (var i = 1; i <= n; i++) {
        deret += i;
    }

    document.fform.faktorial.value = faktorial;
    document.fform.deret.value = deret;
  }
