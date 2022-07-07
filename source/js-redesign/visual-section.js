'use strict';

window.addEventListener('DOMContentLoaded', (e) => {
  const visualCompare = document.querySelector('.visual');

  if (visualCompare) {
    const visualLine = document.querySelector('.visual__line-inner');
    const top = visualCompare.querySelector('.visual__compare-top');
    const wrap = visualCompare.querySelector('.visual__compare-wrap');
    const startPosition = visualCompare.getAttribute('data-start-position');

    wrap.style.minWidth = document.querySelector('.wrapper').offsetWidth + 'px';
    top.style.width = startPosition;
    visualLine.style.left = startPosition;

    window.addEventListener('resize', (e) => {
      wrap.style.minWidth =
        document.querySelector('.wrapper').offsetWidth + 'px';
    });

    const moveSlider = (e) => {
      let position = e.pageX - visualCompare.offsetLeft;
      if (position > visualCompare.offsetWidth)
        position = visualCompare.offsetWidth;
      top.style.width = (position / visualCompare.offsetWidth) * 100 + '%';
      visualLine.style.left =
        (position / visualCompare.offsetWidth) * 100 + '%';
    };

    visualCompare.addEventListener('mousedown', (e) => {
      visualCompare.classList.add('transition');
      moveSlider(e);
      visualCompare.onmousemove = (e) => {
        visualCompare.classList.remove('transition');
        moveSlider(e);
      };
    });
    visualCompare.addEventListener('mouseup', (e) => {
      visualCompare.onmousemove = () => {};
    });
  }
});
