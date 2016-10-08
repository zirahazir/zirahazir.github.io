$(".avatar-image").rotate({bind:{
  click: function(){
    $(this).rotate({
      duration:6000,
      angle: 0,
      animateTo:100
      })
    }
  }
});
