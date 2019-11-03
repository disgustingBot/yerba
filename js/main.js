d=document;w=window;c=console;


w.onload=()=>{
  // REMOVE LOADER ANIMATION
  d.getElementById("load").style.top="-100vh"
  // LAZY LOAD FUNCTIONS
  var lBs=[].slice.call(d.querySelectorAll(".lazy-background")),lIs=[].slice.call(d.querySelectorAll(".lazy")),opt={threshold:.01};
  if("IntersectionObserver" in window){
    let lBO=new IntersectionObserver(es=>{es.forEach(e=>{if(e.isIntersecting){let l=e.target;l.classList.add("visible");lBO.unobserve(l)}})},opt),
        lIO=new IntersectionObserver(es=>{es.forEach(e=>{if(e.isIntersecting){let l=e.target;l.classList.remove("lazy");lIO.unobserve(l);l.srcset=l.dataset.url}})},opt);
    lIs.forEach(lI=>{lIO.observe(lI)});lBs.forEach(lB=>{lBO.observe(lB)});
  }

}





const header = d.querySelector(".header");
// HEADER TRANSPARENT HANDLER
const headerHandlerOpt = {
  root: null,
  threshold: .2,
  rootMargin: "0px 0px 0px 0px"
};
const headerHandler=new IntersectionObserver(entries=>{
  entries.forEach(entry => {
    if(entry.isIntersecting){header.classList.remove('headerTop')}else{header.classList.add('headerTop')}
  })
}, headerHandlerOpt);
// HEADER TRANSPARENT HANDLER
if(d.querySelector("#headerActivator")){headerHandler.observe(d.querySelector("#headerActivator"))}else{header.classList.add('headerTop')}









// NAVBAR HANDLER
const alternateNavBar=()=>{const navBar=d.querySelector("#mobileMenu");if(navBar.classList.contains("active")){navBar.classList.remove("active")}else{navBar.classList.add("active")}}

// SLIDER:
var j=1,x=d.getElementsByClassName("carouselItem");
const showDivs=n=>{
  if(n>x.length){j=1}
  if(n<1){j=x.length}
  for(i=0;i<x.length;i++){x[i].classList.add("inactive")}
  x[j-1].classList.remove("inactive");
}
const carousel=()=>{j++;
  for(i=0;i<x.length;i++){x[i].classList.add("inactive")}
  if(j>x.length){j=1}
  x[j-1].classList.remove("inactive");
  setTimeout(carousel, 8000); // Change image every N/1000 seconds
}
const plusDivs=n=>{showDivs(j+=n)}
if(x.length>0){showDivs(j);carousel()}














const options = {
  root: null, // it is the viewport, that's the default
  threshold: .2, // that's the default
  // rootMargin: "3rem 0px 0px 0px" // that's the default
};

const observer = new IntersectionObserver((entries, observer)=>{
  entries.forEach(entry => {
    id=entry.target.getAttribute('data-target')
    if (entry.isIntersecting) {
      d.getElementById(id).classList.add('subrayado');
      // c.log(d.getElementById(id));
    } else {
      d.getElementById(id).classList.remove('subrayado');
    }
    // c.log(entry);
  })
}, options);

const sections = d.querySelectorAll('section');
c.log(!!sections[1].id);
// c.log(sections);
// observer.observe(sections);
sections.forEach(e => {
  if (!!sections[1].id) {
    observer.observe(e);
  }
})
