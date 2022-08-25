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

  // Tant qu'il reste des éléments à brasser
  while (0 !== currentIndex) {
    // Choisi l'élément restant
    randomIndex = Math.floor(Math.random() * currentIndex);
    currentIndex--;
    console.log(randomIndex);
    // échange avec l'élément actuel.
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

  // Initialisation de variable
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

  //
  // Chaque article a un gain de 12,5%
  let BonAchat10 = shuffle([1890]);
  let BonAchat15 = shuffle([1850]);
  let Remise15 = shuffle([1810]);
  let Remise10 = shuffle([1770]);
  let BonAchat5 = shuffle([1750]);
  let Remise5 = shuffle([1630]);
  let Remise20 = shuffle([1570]);

  // Forme aléatoire
  let Hasil = shuffle([
    BonAchat10[0],
    BonAchat15[0],
    Remise15[0],
    Remise10[0],
    BonAchat5[0],
    Remise5[0],
    Remise20[0],
  ]);

  // Prend la valeur de l'élément sélectionné
  if (BonAchat10.includes(Hasil[0])) SelectedItem = "Bon de 10€";
  if (BonAchat15.includes(Hasil[0])) SelectedItem = "Bon de 15€";
  if (Remise15.includes(Hasil[0])) SelectedItem = "Remise de 15%";
  if (Remise10.includes(Hasil[0])) SelectedItem = "Remise de 10%";
  if (BonAchat5.includes(Hasil[0])) SelectedItem = "Bon de 5€";
  if (Remise5.includes(Hasil[0])) SelectedItem = "Remise de 5%";
  if (Remise20.includes(Hasil[0])) SelectedItem = "Remise de 20%";

  // Proses
  box.style.setProperty("transition", "all ease 5s");
  box.style.transform = "rotate(" + Hasil[0] + "deg)";
  element.classList.remove("animate");
  setTimeout(function () {
    element.classList.add("animate");
  }, 5000);

  $("#Item").val(SelectedItem);





  // Alert
  setTimeout(function () {
    swal({
      title: "Félicitations",
      text: "Vous avez gagné : " + SelectedItem,
      icon: "success",
      button: 'Recevoir le code par mail',
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
