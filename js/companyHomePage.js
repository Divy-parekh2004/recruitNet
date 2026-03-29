// GSAP animations (balloons and floating elements)
if (typeof gsap !== 'undefined') {
    gsap.registerPlugin(ScrollTrigger);
    gsap.to('.balloon-circle', { y: -20, duration: 3, repeat: -1, yoyo: true, ease: "power1.inOut" });
}