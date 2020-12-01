$('select').on('change', function() {
    //this.value;
    $('form').append("Veuillez renseigner les " + this.value + " valeurs :");
    for(let i = 0; i<this.value;i++){
        $('form').append('<input type="text" id="' + i + '" placeholder="Answer">');
    }
    $('form').append('<label>Combien de temps pour répondre ?<input type="time" id="time" placeholder="Time"></label>');
  });