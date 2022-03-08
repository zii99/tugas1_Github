function kosong1() {
  let frm = document.getElementById("kalkulator");
  frm.a1.value = "";
}

function kosong2() {
  let frm = document.getElementById("kalkulator");
  frm.a2.value = "";
}

function kosongALL() {
  let frm = document.getElementById("kalkulator");
  frm.a1.value = "";
  frm.a2.value = "";
  frm.hasil.value = "";
}

function hitung(operator) {
  let frm = document.getElementById("kalkulator");
  let a1 = parseInt(frm.a1.value);
  let a2 = parseInt(frm.a2.value);
  let hasil;
  if (isNaN(a1) || a1 == "" || isNaN(a2) || a2 == "") {
    alert("Harap isi data berupa angka");
  } else {
    switch (operator) {
      case "tambah":
        hasil = a1 + a2;
        break;
      case "kurang":
        hasil = a1 - a2;
        break;
      case "kali":
        hasil = a1 * a2;
        break;
      case "bagi":
        hasil = a1 / a2;
        break;
      case "pangkat":
        hasil = a1 ** a2;
        break;
      default:
        hasil = 0;
    }
    frm.hasil.value = hasil;
  }
}
