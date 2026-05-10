const initCursorPill = () => {
    const pill = document.getElementById('imgCursorPill')
    const images = document.querySelectorAll('[data-img-link]')

    if (!pill || !images.length) return

    let currentX = 0
    let currentY = 0

    let targetX = 0
    let targetY = 0

    let visible = false
    let lastTime = null

    const SPEED = 10

    const lerp = (start, end, amount) => {
        return start + (end - start) * amount
    }

    const animate = (timestamp) => {
        requestAnimationFrame(animate)

        const delta = lastTime
            ? Math.min((timestamp - lastTime) / 1000, 0.05)
            : 0

        lastTime = timestamp

        const amount = Math.min(
            1 - Math.pow(1 - SPEED * delta, 1),
            1
        )

        currentX = lerp(currentX, targetX, amount)
        currentY = lerp(currentY, targetY, amount)

        pill.style.transform = `
            translate(
                calc(${currentX}px - 50%),
                calc(${currentY}px - 50%)
            )
            scale(${visible ? 1 : 0.6})
        `

        pill.style.opacity = visible ? '1' : '0'
    }

    requestAnimationFrame(animate)

    document.addEventListener(
        'mousemove',
        (event) => {
            targetX = event.clientX
            targetY = event.clientY
        },
        { passive: true }
    )

    images.forEach((image) => {
        image.addEventListener('mouseenter', (event) => {
            currentX = event.clientX
            currentY = event.clientY

            targetX = event.clientX
            targetY = event.clientY

            visible = true

            pill.classList.add('visible')
        })

        image.addEventListener('mouseleave', () => {
            visible = false

            pill.classList.remove('visible')
        })
    })
}

const initRevealAnimations = () => {
    const elements = document.querySelectorAll(
        '.reveal, .reveal-left, .reveal-right, .reveal-scale'
    )

    if (!elements.length) return

    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (!entry.isIntersecting) return

                entry.target.classList.add('visible')

                observer.unobserve(entry.target)
            })
        },
        {
            threshold: 0.12,
            rootMargin: '0px 0px -40px 0px',
        }
    )

    elements.forEach((element) => {
        observer.observe(element)
    })
}

const initCounters = () => {
    const counters = document.querySelectorAll('[data-target]')

    if (!counters.length) return

    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (!entry.isIntersecting) return

                const element = entry.target

                const target = parseFloat(element.dataset.target)
                const suffix = element.dataset.suffix || ''
                const decimals = parseInt(
                    element.dataset.decimals || '0',
                    10
                )

                const duration = 1600
                const start = performance.now()

                const updateCounter = (now) => {
                    const progress = Math.min(
                        (now - start) / duration,
                        1
                    )

                    const eased =
                        1 - Math.pow(1 - progress, 3)

                    const value = target * eased

                    element.textContent =
                        value.toFixed(decimals) + suffix

                    if (progress < 1) {
                        requestAnimationFrame(updateCounter)
                    }
                }

                requestAnimationFrame(updateCounter)

                observer.unobserve(element)
            })
        },
        {
            threshold: 0.5,
        }
    )

    counters.forEach((counter) => {
        observer.observe(counter)
    })
}

const initMarquee = () => {
    const marquee = document.getElementById('np-marquee')

    if (!marquee) return

    if (marquee.children.length < 20) {
        marquee.innerHTML += marquee.innerHTML
    }
}

document.addEventListener('DOMContentLoaded', () => {
    initCursorPill()
    initRevealAnimations()
    initCounters()
    initMarquee()
})
