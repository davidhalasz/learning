<div class="-mt-10 mb-20 container mx-auto flex justify-center gap-20" id="display-counter">
    <div class="flex flex-col">
        <div class="w-full text-center text-4xl font-bold">
            <span id="counter1" class="counter">0</span>+
        </div>
        <p class="text-xl pt-2">év felnőttképzési tapasztalat</p>
    </div>
    <div class="flex flex-col">
        <div class="w-full text-center text-4xl font-bold">
            <span id="counter2" class="counter">0</span>+
        </div>
        <p class="text-xl pt-2">elméleti és gyakorlati lean képzési tematika</p>
    </div>
    <div class="flex flex-col">
        <div class="w-full text-center text-4xl font-bold">
            <span id="counter3" class="counter">0</span>+
        </div>
        <p class="text-xl pt-2">képzés résztvevő</p>
    </div>
    <script>
        const counterElement1 = document.getElementById('counter1');
        const counterElement2 = document.getElementById('counter2');
        const counterElement3 = document.getElementById('counter3');
        const targetElement = document.getElementById('display-counter');

        let observer;
        let isVisible = false;

        const options = {
            threshold: 0.5
        };

        function startCounting1() {
            let count = 0;
            const increment = 1;
            const targetCount = 15;

            const counterInterval = setInterval(() => {
                counterElement1.textContent = count;
                count += increment;

                if (count > targetCount) {
                    counterElement1.textContent = targetCount;
                    clearInterval(counterInterval);
                }
            }, 50);

            counterElement1.style.opacity = 1;
        }

        function startCounting2() {
            let count = 0;
            const increment = 1;
            const targetCount = 21;

            const counterInterval = setInterval(() => {
                counterElement2.textContent = count;
                count += increment;

                if (count > targetCount) {
                    counterElement2.textContent = targetCount;
                    clearInterval(counterInterval);
                }
            }, 50);

            counterElement2.style.opacity = 1;
        }

        function startCounting3() {
            let count = 0;
            const increment = 140;
            const targetCount = 4000;

            const counterInterval = setInterval(() => {
                counterElement3.textContent = count;
                count += increment;

                if (count > targetCount) {
                    counterElement3.textContent = targetCount;
                    clearInterval(counterInterval);
                }
            }, 50);

            counterElement3.style.opacity = 1;
        }

        function handleIntersection(entries, observer) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    if (!isVisible) {
                        isVisible = true;
                        startCounting1();
                        startCounting2();
                        startCounting3();
                    }
                } else {
                    isVisible = false;
                }
            });
        }

        function createObserver() {
            if (observer) {
                observer.disconnect();
            }

            observer = new IntersectionObserver(handleIntersection, options);
            observer.observe(targetElement);
        }

        createObserver();
    </script>
</div>
