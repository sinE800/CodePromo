//
// const formV = document.getElementById('myForm');
// formV.addEventListener('submit', function (e) {
//   e.preventDefault();
//
// })

// if ( window.history.replaceState ) {
//   window.history.replaceState( null, null, window.location.href );
// }


function shuffle(array) {
  let currentIndex = array.length,
      randomIndex;

  // While there remain elements to shuffle...
  while (0 !== currentIndex) {
    // Pick a remaining element...
    randomIndex = Math.floor(Math.random() * currentIndex);
    currentIndex--;

    // And swap it with the current element.
    [array[currentIndex], array[randomIndex]] = [
      array[randomIndex],
      array[currentIndex],
    ];
  }

  return array;
}

  //
  // if ($('#input').val() !== '' ) {
  //   $('#principale').attr('disabled', false);
  // } else {
  //   $('#principale').attr('disabled', true);
  // }



function spin() {





  // setTimeout(function(){
  //   alert("hello");
  // },10000);

  // Inisialisasi variabel
  const box = document.getElementById("box");
  const element = document.getElementById("mainbox");
  const form = document.querySelector("#myForm");
  let counter = 0;
  let SelectedItem = "";



  // function codeProbablementBogue() {
  //   console.log(  $('#myForm').serializeArray())
  //
  //   form.
  //       debugger;
  // }
  // codeProbablementBogue()

  // Shuffle 450 karena class box1 sudah ditambah 90 derajat diawal. minus 40 per item agar posisi panah pas ditengah.
  // Setiap item memiliki 12.5% kemenangan kecuali item sepeda yang hanya memiliki sekitar 4% peluang untuk menang.
  // Item berupa ipad dan samsung tab tidak akan pernah menang.
  // let Sepeda = shuffle([2210]); //Kemungkinan : 33% atau 1/3
  let BonAchat10 = shuffle([1890, 2250, 2610]);
  let Sepeda = shuffle([1850, 2210, 2570]); //Kemungkinan : 100%
  let RiceCooker = shuffle([1810, 2170, 2530]);
  let LunchBox = shuffle([1770, 2130, 2490]);
  let Sanken = shuffle([1750, 2110, 2470]);
  let Electrolux = shuffle([1630, 1990, 2350]);
  let JblSpeaker = shuffle([1570, 1930, 2290]);

  // Bentuk acak
  let Hasil = shuffle([
    BonAchat10[0],
    Sepeda[0],
    RiceCooker[0],
    LunchBox[0],
    Sanken[0],
    Electrolux[0],
    JblSpeaker[0],
  ]);

  // Ambil value item yang terpilih
  if (BonAchat10.includes(Hasil[0])) SelectedItem = "Bon d'achat 10€";
  if (Sepeda.includes(Hasil[0])) SelectedItem = "Sepeda Aviator";
  if (RiceCooker.includes(Hasil[0])) SelectedItem = "Rice Cooker Philips";
  if (LunchBox.includes(Hasil[0])) SelectedItem = "Lunch Box Lock&Lock";
  if (Sanken.includes(Hasil[0])) SelectedItem = "Air Cooler Sanken";
  if (Electrolux.includes(Hasil[0])) SelectedItem = "Electrolux Blender";
  if (JblSpeaker.includes(Hasil[0])) SelectedItem = "JBL Speaker";

  // Proses
  box.style.setProperty("transition", "all ease 5s");
  box.style.transform = "rotate(" + Hasil[0] + "deg)";
  element.classList.remove("animate");
  setTimeout(function () {
    element.classList.add("animate");
  }, 5000);
  $("#Item").val(SelectedItem);





  // Munculkan Alert
  setTimeout(function () {
    // applause.play();





    swal({
      title: "Félicitations",
      text: "Vous avez gagné : " + SelectedItem  ,
      icon: "success",
      button: 'Recevoir',
    }).then(function() {

      form.submit();
    });
  }, 5500);
  console.log(SelectedItem);
  // Delay and set to normal state
  setTimeout(function () {
    box.style.setProperty("transition", "initial");
    box.style.transform = "rotate(90deg)";
  }, 10000000);

  $('.btn').attr('disabled', true );
  // $('#principale').attr(['disabled', true, 'type', 'submit']);





  // $.fn.serializeObject = function()
  // {
  //   const o = {};
  //   const a = this.serializeArray();
  //   $.each(a, function() {
  //     if (o[this.name] !== undefined) {
  //       if (!o[this.name].push) {
  //         o[this.name] = [o[this.name]];
  //       }
  //       o[this.name].push(this.value || '');
  //     } else {
  //       o[this.name] = this.value || '';
  //     }
  //   });
  //   return o;
  // };






  $(document).on("submit", "#myForm", function(e){

    // const xhttp = new XMLHttpRequest();
    // const $url = $("#myForm").attr("action");// + '.json';
    // const $value = $("myForm").val();
    // $.ajax({
    //   type: "POST",
    //   url: $url,
    //   data: SelectedItem,
    //   dataType: 'json',
    //   success: function(data) {
    //     console.log(data)
    //     xhttp.send(JSON.stringify(data));
    //     debugger
    //   }/*,
    //                     dataType: 'json'*/
    // });
    e.preventDefault();
    return  false;
  });





    // window.RepLogApp = function ($wrapper) {
    //   this.$wrapper = $wrapper;
    //   this.$wrapper.find('.js-new-rep-log-form').on(
    //       'submit',
    //       this.handleNewFormSubmit.bind(this)
    //
    //   );
    // };









      // $.ajax({
      //   url: form.attr('action'),
      //   method: 'POST',
      //   data: form.serialize()
      // });
      // console.log('OK')




}
