const CACHE_NAME = 'offline-v3';

const filesToCache = [
    '/',
    '/homepageuser',
    '/teknologiinformasidankomunikasi',
    '/aboutus',
    '/suggestionscriticism',
    '/sejarahperkembangantik',
    '/pengertiantik',
    '/komponenkomponen',
    '/manfaattik',
    '/dampaktik',
    '/penerapantik',
    '/masaprasejarah',
    '/masasejarah',
    '/masamodern',
    '/sejarahperkembangankomputer',
    '/css/style.css',
    '/assets/bootstrap/css/bootstrap.min.css',
    '/assets/bootstrap/js/bootstrap.bundle.min.js',
    '/fonts/subset-Lora-Bold.woff',
    '/fonts/subset-Lora-Bold.woff2',
    '/fonts/subset-Lora-Regular.woff',
    '/fonts/subset-Lora-Regular.woff2',
    '/fonts/subset-Lora-Italic.woff',
    '/fonts/subset-Lora-Italic.woff2',
    '/fonts/subset-Lora-BoldItalic.woff',
    '/fonts/subset-Lora-BoldItalic.woff2',
    '/fonts/subset-Lora-Medium.woff',
    '/fonts/subset-Lora-Medium.woff2',
    '/fonts/subset-Lora-MediumItalic.woff',
    '/fonts/subset-Lora-MediumItalic.woff2',
    '/fonts/subset-Lora-SemiBold.woff',
    '/fonts/subset-Lora-SemiBold.woff2',
    '/fonts/subset-Lora-SemiBoldItalic.woff',
    '/fonts/subset-Lora-SemiBoldItalic.woff2',
    '/assets/images/routemap.png',
    '/assets/images/tech-globe.png',
    '/assets/images/book.png',
    '/assets/images/gear.png',
    '/assets/images/manfaat.png',
    '/assets/images/impact.png',
    '/assets/images/implementation.png',
    '/assets/images/lukisandidindinggua.jpg',
    '/assets/images/mesincetak.jpg',
    '/assets/images/tulisanpiktograf.jpg',
    '/assets/images/komputergenerasipertama.jpg',
    '/assets/images/gambarhieroglif.jpg',
    '/assets/images/abacus.jpg',
    '/assets/images/abjadfonetik.jpg',
    '/assets/images/turtleshell.jpg',
    '/assets/images/letteronpapyrus.jpg',
    '/assets/images/oldestextantpaperfragment.jpg',
    '/assets/images/cai_lun.jpg',
    '/assets/images/mesincetak.jpg',
    '/assets/images/prinsipkameraobscura.jpg',
    '/assets/images/alhaytham.jpg',
    '/assets/images/thepascaline.png',
    '/assets/images/henry-mill-typewriter.jpg',
    '/assets/images/OptischerTelegraf.jpg',
    '/assets/images/bain.jpg',
    '/assets/images/zuse.jpg',
    '/assets/images/Sputnik.jpg',
    '/assets/images/Chester-Carlson.png',
    '/assets/images/komputergenerasikedua.png',
    '/assets/images/komputergenerasiketiga.jpg',
    '/assets/images/komputergenerasikeempat.jpg',
    '/assets/images/komputergenerasikelima.png',
    '/assets/video/first-video.mp4',
    '/assets/video/hero-page.mp4',
    '/assets/video/grafis.mp4',
    '/offline.html'
];

self.addEventListener("install", event => {
    event.waitUntil(
        caches.open(CACHE_NAME).then(cache => cache.addAll(filesToCache))
    );
    self.skipWaiting();
});

self.addEventListener('activate', event => {
    event.waitUntil(
        caches.keys().then(keys => Promise.all(
            keys.filter(key => key !== CACHE_NAME).map(key => caches.delete(key))
        ))
    );
    self.clients.claim();
});

self.addEventListener('fetch', event => {
    event.respondWith(
        caches.match(event.request).then(response => {
            if (response) {
                return response; // return cache if found
            }
            return fetch(event.request).then(fetchResponse => {
                return caches.open(CACHE_NAME).then(cache => {
                    cache.put(event.request, fetchResponse.clone());
                    return fetchResponse;
                });
            }).catch(() => {
                // fallback to offline.html if fetch fails (offline mode)
                if (event.request.mode === 'navigate') {
                    return caches.match('/offline.html');
                }
            });
        })
    );
});

// const preLoad = function () {
//     return caches.open("offline-v3").then(function (cache) {
//         // caching index and important routes
//         return cache.addAll(filesToCache);
//     });
// };

// self.addEventListener("install", event => {
//     event.waitUntil(
//         caches.open(CACHE_NAME).then(cache => cache.addAll(filesToCache))
//     );
//     self.skipWaiting();
// });



// const checkResponse = function (request) {
//     return new Promise(function (fulfill, reject) {
//         fetch(request).then(function (response) {
//             if (response.status !== 404) {
//                 fulfill(response);
//             } else {
//                 reject();
//             }
//         }, reject);
//     });
// };

// const addToCache = function (request) {
//     return caches.open("offline-v3").then(function (cache) {
//         return fetch(request).then(function (response) {
//             return cache.put(request, response);
//         });
//     });
// };

// const returnFromCache = function (request) {
//     return caches.open("offline-v3").then(function (cache) {
//         return cache.match(request).then(function (matching) {
//             if (!matching || matching.status === 404) {
//                 return cache.match("offline.html");
//             } else {
//                 return matching;
//             }
//         });
//     });
// };

// self.addEventListener('activate', event => {
//     event.waitUntil(
//         caches.keys().then(keys => Promise.all(
//             keys.filter(key => key !== CACHE_NAME).map(key => caches.delete(key))
//         ))
//     );
//     self.clients.claim();
// });
// ====================================================
// self.addEventListener('fetch', function(event) {
//   event.respondWith(
//     caches.match(event.request).then(function(response) {
//       if (response) {
//         return response;
//       }
//       return fetch(event.request).then(fetchResponse => {
//         return caches.open(CACHE_NAME).then(cache => {
//             cache.put(event.request, fetchResponse.clone());
//             return fetchResponse;
//         });
//       });
//     }).catch(() => {
//         return caches.match('/');
//     })
//   );
// });

// self.addEventListener("fetch", function (event) {
//     event.respondWith(checkResponse(event.request).catch(function () {
//         return returnFromCache(event.request);
//     }));
//     if(!event.request.url.startsWith('http')){
//         event.waitUntil(addToCache(event.request));
//     }
// });