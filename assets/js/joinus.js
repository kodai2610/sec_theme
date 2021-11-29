//slick
$(window).on('load', function() {
  $('#slider').slick({
    centerMode: false,
    centerPadding	: '0px',
    variableWidth: true,
    autoplay: true,
    autoplaySpeed: 500,
    arrows : false,
    responsive: [{
      breakpoint: 769,  //ブレイクポイントを指定
      settings: {
        centerMode: true,
      },
    }]
  })
});


//card 
const card1 = document.querySelector('.point-card--1');
const card2 = document.querySelector('.point-card--2');
const card3 = document.querySelector('.point-card--3');

const cb = function(entries,observer) {
  entries.forEach(entry => {
    if(entry.isIntersecting) { //isIntersectingプロパティ:監視下にあるか？
      targetClass = entry.target.dataset.class;
      entry.target.classList.add(targetClass);
      observer.unobserve(entry.target);
    }
  });
};

const io = new IntersectionObserver(cb);
io.observe(card1);
io.observe(card2);
io.observe(card3);


//modal 
const overlay = document.getElementById('overlay');
const triggers = document.querySelectorAll('.open');
triggers.forEach(trigger => {
  const target = document.getElementById(trigger.dataset.id);
  const close = target.childNodes[1];
  trigger.addEventListener('click',() => {
    target.classList.add('active');
    overlay.classList.add('active');
    document.querySelector('body').classList.add('no-scroll');
  });
  close.addEventListener('click',()=> {
    target.classList.remove('active');
    overlay.classList.remove('active');
    document.querySelector('body').classList.remove('no-scroll');
  });
  overlay.addEventListener('click',()=> {
    close.click(); //closeと同じ動き
  });
});


// const cb2 = function(entries,observer) {
//   entries.forEach(entry => {
//     const target = document.querySelector('.entry');
//     targetClass = target.dataset.class;
//     if(entry.isIntersecting) { //isIntersectingプロパティ:監視下にあるか？
//       target.classList.remove('outview');
//       target.classList.add('inview');
//     }else {
//       target.classList.remove('inview');
//       target.classList.add('outview');
//     }
//   });
// };
// const entryArea = document.getElementById('entry-area');
// const io2 = new IntersectionObserver(cb2);
// io2.observe(entryArea);
const entryElm = document.querySelector('.entry');
//entryのフェードイン
window.addEventListener('scroll', function(){
  let scroll = window.pageYOffset;
  const border = document.getElementById('entry-border');
  if(scroll >= border.getBoundingClientRect().top + scroll) {
    entryElm.classList.remove('outview');
    entryElm.classList.add('inview');
  } else {
    entryElm.classList.remove('inview');
    entryElm.classList.add('outview');
  }
});

//entryクリックしたら遷移
entryElm.addEventListener('click', (e) => {
  e.preventDefault(); //eventのデフォルトの操作を停止
  const href = entryElm.getAttribute('href');
  const targetElm = document.getElementById(href.replace('#', ''));
  const rect = targetElm.getBoundingClientRect().top; 
  const scroll = window.pageYOffset;
  const target = rect + scroll; //ターゲットの位置を取得
  window.scrollTo({
    top: target,
    behavior: 'smooth',
  });
});



//ページ内リンクへの遷移対策
window.onload = function() {
  if(window.location.hash == '') { //hash = #
    return;
  }
  document.getElementById(window.location.hash.slice(1)).scrollIntoView(true); //#descだったらslice(1)でdescとなる
}

