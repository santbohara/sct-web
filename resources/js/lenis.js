import Lenis from 'lenis'

const lenis = new Lenis({
    duration: 1.4,
    easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)),
    orientation: 'vertical',
    gestureOrientation: 'vertical',
    smoothWheel: true,
    wheelMultiplier: 0.85,
    touchMultiplier: 1.8,
    infinite: false,
})

function raf(time) {
    lenis.raf(time)

    requestAnimationFrame(raf)
}

requestAnimationFrame(raf)

/* =========================================
   KEEP SCROLL EVENTS IN SYNC
========================================= */


/* =========================================
   SMOOTH ANCHOR LINKS
========================================= */

document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
        anchor.addEventListener('click', function (e) {
            const href = this.getAttribute('href')

            if (!href || href === '#') return

            const target = document.querySelector(href)

            if (!target) return

            e.preventDefault()

            lenis.scrollTo(target, {
                offset: -68,
                duration: 1.6,
                easing: (t) =>
                    Math.min(
                        1,
                        1.001 - Math.pow(2, -10 * t)
                    ),
            })
        })
    })
})

export default lenis
