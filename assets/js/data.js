//セクション内部のアニメーション
var sectionAnimationFunc = function(sectionElm) {
  var bounceElm = sectionElm.querySelectorAll('.bounce');
  var effectElm = sectionElm.querySelectorAll('.data-effect');
  for(var b = 0; b < bounceElm.length; b++) {
    target = bounceElm[b].dataset.class;
    bounceElm[b].classList.add(target);
  }
  for(var e = 0; e < effectElm.length; e++) {
    target = effectElm[e].dataset.class;
    effectElm[e].classList.add(target);
  }
}

//アニメーション初期化
var rmSectionAnimationFunc = function(prevSectionElms) {
  prevSectionElms.forEach(prevSectionElm => {
    var bounceElm = prevSectionElm.querySelectorAll('.bounce');
    var effectElm = prevSectionElm.querySelectorAll('.data-effect');
    for(var b = 0; b < bounceElm.length; b++) {
      target = bounceElm[b].dataset.class;
      bounceElm[b].classList.remove(target);
    }
    for(var e = 0; e < effectElm.length; e++) {
      target = effectElm[e].dataset.class;
      effectElm[e].classList.remove(target);
    }
  });
}


jQuery(function () { 
  jQuery('#fullpage').fullpage({
    scrollOverflow: true,
    scrollingSpeed:	1000,
    navigation: true,
    navigationPosition: 'right',
    afterRender: function() { //初期化時のアニメーション
      var sectionElm = document.querySelector('.top');
      sectionAnimationFunc(sectionElm);
    },
    onLeave : function(index,nextIndex,direction) {
      var currentIndex = nextIndex - 1;
      var sections = document.querySelectorAll('.section');
      var convertedTypeArraySections = Array.from(sections);
      var prevSectionElms = convertedTypeArraySections.filter(function(val,valIndex) {
        return valIndex !== currentIndex; 
      });
      rmSectionAnimationFunc(prevSectionElms);
    },
    afterLoad : function(index,nextIndex,direction) {
      var currentIndex = nextIndex - 1;
      var sections = document.querySelectorAll('.section');
      var convertedTypeArraySections = Array.from(sections);
      var sectionElm = sections[currentIndex];
      var prevSectionElms = convertedTypeArraySections.filter(function(val,valIndex) {
        return valIndex !== currentIndex; 
      });
      sectionAnimationFunc(sectionElm);
    }
  });
});

// window.addEventListener('DOMContentLoaded', () => {
//   const myFullpage = new fullpage('#fullpage',{
//     scrollOverflow: true,
//     scrollingSpeed: 1000,
//     navigation: true,
//     navigationPosition: 'right',
//     afterRender: function () { //初期化時のアニメーション
//       var sectionElm = document.querySelector('.top');
//       sectionAnimationFunc(sectionElm);
//     },
//     onLeave: function (index, nextIndex, direction) {
//       var currentIndex = nextIndex - 1;
//       var sections = document.querySelectorAll('.section');
//       var convertedTypeArraySections = Array.from(sections);
//       var prevSectionElms = convertedTypeArraySections.filter(function (val, valIndex) {
//         return valIndex !== currentIndex;
//       });
//       rmSectionAnimationFunc(prevSectionElms);
//     },
//     afterLoad: function (index, nextIndex, direction) {
//       var currentIndex = nextIndex - 1;
//       var sections = document.querySelectorAll('.section');
//       var convertedTypeArraySections = Array.from(sections);
//       var sectionElm = sections[currentIndex];
//       var prevSectionElms = convertedTypeArraySections.filter(function (val, valIndex) {
//         return valIndex !== currentIndex;
//       });
//       sectionAnimationFunc(sectionElm);
//     }
//   });
// });

// jQuery(function () {
//   jQuery('#fullpage').fullpage({
//       scrollOverflow: true,
//       scrollingSpeed:	1000,
//       navigation: true,
//       navigationPosition: 'right',
//       afterRender: function() {
//         sectionElm = document.querySelector('.top');
//         sectionAnimationFunc(sectionElm);
//       },
//       onLeave: function(index, nextIndex, direction){
//         if(direction == 'down') {
//           var sectionElm = document.querySelectorAll('.section')[index];
//           var prevSectionElm = document.querySelectorAll('.section')[index - 1];
//           sectionAnimationFunc(sectionElm);
//           rmSectionAnimationClassFunc(prevSectionElm);
//         } else if(direction == 'up') {
//           var sectionElm = document.querySelectorAll('.section')[index - 2];
//           var prevSectionElm = document.querySelectorAll('.section')[index - 1];
//           sectionAnimationFunc(sectionElm);
//           rmSectionAnimationClassFunc(prevSectionElm);
//         }
//       },
//   });
// });


// if(index == 1 && nextIndex == 2 && direction =='down'){
        //   // alert('１枚目を下にスクロールして、こんにちは２枚目！');
        //   var sectionElm = document.querySelectorAll('.section')[1];//0
        //   var prevSectionElm = document.querySelectorAll('.section')[0];
        //   sectionAnimationFunc(sectionElm);
        //   rmSectionAnimationClassFunc(prevSectionElm);
        // }
        // else if(index == 2 && nextIndex == 3 && direction =='down') {
        //   // alert('２枚目をdownにスクロールして、こんにちは3枚目！');
        //   var sectionElm = document.querySelectorAll('.section')[2];
        //   var prevSectionElm = document.querySelectorAll('.section')[1];
        //   sectionAnimationFunc(sectionElm);
        //   rmSectionAnimationClassFunc(prevSectionElm);
        // }
        // else if(index == 2 && nextIndex == 1 && direction =='up') {
        //   // alert('２枚目を上にスクロールして、こんにちは１枚目！');
        //   var sectionElm = document.querySelectorAll('.section')[0];
        //   var prevSectionElm = document.querySelectorAll('.section')[1];
        //   sectionAnimationFunc(sectionElm);
        //   rmSectionAnimationClassFunc(prevSectionElm);
        // }
        // else if(index == 3 && nextIndex == 2 && direction =='up') {
        //     // alert('3枚目を上にスクロールして、こんにちは2枚目！');
        //     var sectionElm = document.querySelectorAll('.section')[1];
        //     var prevSectionElm = document.querySelectorAll('.section')[2];
        //     sectionAnimationFunc(sectionElm);
        //     rmSectionAnimationClassFunc(prevSectionElm);
        // }