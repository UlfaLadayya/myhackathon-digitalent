const CACHE_NAME = 'offline-v16';

const filesToCache = [
    location.origin + '/',
    location.origin + '/homepageuser',
    location.origin + '/teknologiinformasidankomunikasi',
    location.origin + '/aboutus',
    location.origin + '/suggestionscriticism',
    location.origin + '/sejarahperkembangantik',
    location.origin + '/pengertiantik',
    location.origin + '/komponenkomponen',
    location.origin + '/manfaattik',
    location.origin + '/dampaktik',
    location.origin + '/penerapantik',
    location.origin + '/masaprasejarah',
    location.origin + '/masasejarah',
    location.origin + '/masamodern',
    location.origin + '/sejarahperkembangankomputer',
    location.origin + '/css/style.css',
    location.origin + '/assets/bootstrap/css/bootstrap.min.css',
    location.origin + '/assets/bootstrap/js/bootstrap.bundle.min.js',
    location.origin + '/fonts/subset-Lora-Bold.woff',
    location.origin + '/fonts/subset-Lora-Bold.woff2',
    location.origin + '/fonts/subset-Lora-Regular.woff',
    location.origin + '/fonts/subset-Lora-Regular.woff2',
    location.origin + '/fonts/subset-Lora-Italic.woff',
    location.origin + '/fonts/subset-Lora-Italic.woff2',
    location.origin + '/fonts/subset-Lora-BoldItalic.woff',
    location.origin + '/fonts/subset-Lora-BoldItalic.woff2',
    location.origin + '/fonts/subset-Lora-Medium.woff',
    location.origin + '/fonts/subset-Lora-Medium.woff2',
    location.origin + '/fonts/subset-Lora-MediumItalic.woff',
    location.origin + '/fonts/subset-Lora-MediumItalic.woff2',
    location.origin + '/fonts/subset-Lora-SemiBold.woff',
    location.origin + '/fonts/subset-Lora-SemiBold.woff2',
    location.origin + '/fonts/subset-Lora-SemiBoldItalic.woff',
    location.origin + '/fonts/subset-Lora-SemiBoldItalic.woff2',
    location.origin + '/assets/images/routemap.png',
    location.origin + '/assets/images/tech-globe.png',
    location.origin + '/assets/images/book.png',
    location.origin + '/assets/images/gear.png',
    location.origin + '/assets/images/manfaat.png',
    location.origin + '/assets/images/impact.png',
    location.origin + '/assets/images/implementation.png',
    location.origin + '/assets/images/lukisandidindinggua.jpg',
    location.origin + '/assets/images/mesincetak.jpg',
    location.origin + '/assets/images/tulisanpiktograf.jpg',
    location.origin + '/assets/images/komputergenerasipertama.jpg',
    location.origin + '/assets/images/gambarhieroglif.jpg',
    location.origin + '/assets/images/abacus.jpg',
    location.origin + '/assets/images/abjadfonetik.jpg',
    location.origin + '/assets/images/turtleshell.jpg',
    location.origin + '/assets/images/letteronpapyrus.jpg',
    location.origin + '/assets/images/oldestextantpaperfragment.jpg',
    location.origin + '/assets/images/cai_lun.jpg',
    location.origin + '/assets/images/mesincetak.jpg',
    location.origin + '/assets/images/prinsipkameraobscura.jpg',
    location.origin + '/assets/images/alhaytham.jpg',
    location.origin + '/assets/images/thepascaline.png',
    location.origin + '/assets/images/henry-mill-typewriter.jpg',
    location.origin + '/assets/images/OptischerTelegraf.jpg',
    location.origin + '/assets/images/bain.jpg',
    location.origin + '/assets/images/zuse.jpg',
    location.origin + '/assets/images/Sputnik.jpg',
    location.origin + '/assets/images/Chester-Carlson.png',
    location.origin + '/assets/images/komputergenerasikedua.png',
    location.origin + '/assets/images/komputergenerasiketiga.jpg',
    location.origin + '/assets/images/komputergenerasikeempat.jpg',
    location.origin + '/assets/images/komputergenerasikelima.png',
    location.origin + '/assets/video/first-video.mp4',
    location.origin + '/assets/video/hero-page.mp4',
    location.origin + '/assets/video/grafis.mp4',
    location.origin + '/offline.html'
];

// ✅ Cache file saat install
self.addEventListener('install', event => {
  event.waitUntil(
    caches.open(CACHE_NAME).then(async cache => {
      for (const file of filesToCache) {
        try {
          const response = await fetch(file);
          if (!response.ok) throw new Error(`Gagal fetch: ${file}`);
          await cache.put(file, response.clone());
        } catch (err) {
          console.warn(`❌ Tidak bisa cache: ${file}`, err);
        }
      }
    })
  );
});

self.addEventListener('fetch', event => {
  if (event.request.method !== 'GET') return;

  const url = new URL(event.request.url);

  // Skip fetch event untuk path tertentu supaya service worker tidak ganggu login/logout/cek
  if (url.pathname.startsWith('/Check') || url.pathname.startsWith('/logoutuser') || url.pathname.startsWith('/loginpageuser')) {
    return;  // Lewatkan
  }

  event.respondWith(
    caches.match(event.request).then(cacheResponse => {
      if (cacheResponse) return cacheResponse;

      return fetch(event.request, {
        redirect: 'follow',
        credentials: 'include'
      }).then(networkResponse => {
        if (!networkResponse || networkResponse.status === 401 || networkResponse.status === 302) {
          return networkResponse;
        }

        if (networkResponse.status === 200 && networkResponse.type === 'basic') {
          const responseClone = networkResponse.clone();
          caches.open(CACHE_NAME).then(cache => {
            cache.put(event.request, responseClone);
          });
        }

        return networkResponse;
      }).catch(() => {
        if (event.request.mode === 'navigate') {
          return caches.match('/offline.html');
        }
      });
    })
  );
});


// self.addEventListener('fetch', event => {
//   // ❗ Penting: hanya intercept GET
//   if (event.request.method !== 'GET') return;

//   // Jangan intercept permintaan API/auth atau yang rawan redirect (bisa disesuaikan)
//   const url = new URL(event.request.url);
//   if (url.pathname.startsWith('/Check') || url.pathname.startsWith('/logout') || url.pathname.startsWith('/login')) {
//     // Lewatkan agar service worker tidak ganggu POST/GET login/logout
//     return;
//   }

//   event.respondWith(
//     caches.match(event.request).then(cacheResponse => {
//       if (cacheResponse) return cacheResponse;

//       return fetch(event.request, {
//         redirect: 'follow',
//         credentials: 'include'
//       }).then(networkResponse => {
//         // Jangan cache response redirect (302), unauthorized (401), atau errors
//         if (!networkResponse || networkResponse.status === 401 || networkResponse.status === 302) {
//           return networkResponse;
//         }

//         if (networkResponse.status === 200 && networkResponse.type === 'basic') {
//           const responseClone = networkResponse.clone();
//           caches.open(CACHE_NAME).then(cache => {
//             cache.put(event.request, responseClone);
//           });
//         }

//         return networkResponse;
//       }).catch(() => {
//         if (event.request.mode === 'navigate') {
//           return caches.match('/offline.html');
//         }
//       });
//     })
//   );
// });

// self.addEventListener('fetch', event => {
//   // ❗ Penting: hanya intercept GET
//   if (event.request.method !== 'GET') return;

//   event.respondWith(
//     caches.match(event.request).then(cacheResponse => {
//       if (cacheResponse) return cacheResponse;

//       return fetch(event.request, {
//         redirect: 'follow',
//         credentials: 'include'
//       }).then(networkResponse => {
//         if (
//           !networkResponse ||
//           networkResponse.status === 401 ||
//           networkResponse.status === 302
//         ) {
//           return networkResponse;
//         }

//         if (networkResponse.status === 200 && networkResponse.type === 'basic') {
//           const responseClone = networkResponse.clone();
//           caches.open(CACHE_NAME).then(cache => {
//             cache.put(event.request, responseClone);
//           });
//         }

//         return networkResponse;
//       }).catch(() => {
//         if (event.request.mode === 'navigate') {
//           return caches.match('/offline.html');
//         }
//       });
//     })
//   );
// });


// ✅ Fetch event hanya untuk GET dan tangani redirect dengan benar
// self.addEventListener('fetch', event => {
//   if (event.request.method !== 'GET') return;

//   event.respondWith(
//     caches.match(event.request).then(cacheResponse => {
//       if (cacheResponse) {
//         return cacheResponse;
//       }

//       return fetch(event.request, {
//         redirect: 'follow',
//         credentials: 'include'
//       }).then(networkResponse => {
//         // ⛔ Jangan cache redirect atau unauthorized
//         if (
//           !networkResponse ||
//           networkResponse.status === 401 ||
//           networkResponse.status === 302
//         ) {
//           return networkResponse;
//         }

//         // ✅ Simpan ke cache jika response valid
//         if (networkResponse.status === 200 && networkResponse.type === 'basic') {
//           const responseClone = networkResponse.clone();
//           caches.open(CACHE_NAME).then(cache => {
//             cache.put(event.request, responseClone);
//           });
//         }

//         return networkResponse;
//       }).catch(() => {
//         // Kalau gagal dan ini permintaan halaman
//         if (event.request.mode === 'navigate') {
//           return caches.match('/offline.html');
//         }
//       });
//     })
//   );
// });

// self.addEventListener("install", event => {
//   event.waitUntil(
//     caches.open(CACHE_NAME).then(async cache => {
//       for (const file of filesToCache) {
//         try {
//           const response = await fetch(file);
//           if (!response.ok) {
//             throw new Error(`${file} gagal di-fetch: ${response.status}`);
//           }
//           await cache.put(file, response.clone());
//         } catch (e) {
//           console.warn(`❌ Gagal cache: ${file}`, e);
//         }
//       }
//     })
//   );
// });

// self.addEventListener('fetch', event => {
//   if (event.request.method !== 'GET') return;

//   event.respondWith(
//     caches.match(event.request).then(response => {
//       if (response) return response;

//       const newRequest = new Request(event.request.url, {
//         method: 'GET',
//         headers: new Headers({ 'Accept': 'application/json' }),
//         redirect: 'follow',
//         credentials: 'include'
//       });

//       return fetch(newRequest).then(fetchResponse => {
//         if (!fetchResponse || fetchResponse.status === 401 || fetchResponse.status === 302) {
//           return caches.match('/offline.html');
//         }

//         if (fetchResponse.status === 200 && fetchResponse.type === 'basic') {
//           const responseClone = fetchResponse.clone();
//           caches.open(CACHE_NAME).then(cache => {
//             cache.put(newRequest, responseClone);  // <=== cache newRequest, bukan event.request
//           });
//         }

//         return fetchResponse;
//       }).catch(() => {
//         if (event.request.mode === 'navigate') {
//           return caches.match('/offline.html');
//         }
//       });
//     })
//   );
// });


// self.addEventListener('activate', event => {
//     event.waitUntil(
//         caches.keys().then(keys => Promise.all(
//             keys.filter(key => key !== CACHE_NAME).map(key => caches.delete(key))
//         ))
//     );
//     self.clients.claim();
// });

// self.addEventListener('fetch', event => {
//   if (event.request.method !== 'GET') {
//     return;
//   }

//   event.respondWith(
//     caches.match(event.request).then(response => {
//       if (response) {
//         return response;
//       }

//       const newRequest = new Request(event.request.url, {
//         method: 'GET',
//         headers: new Headers({
//           'Accept': 'application/json'
//         }),
//         redirect: 'follow',
//         credentials: 'include'
//       });

//       return fetch(newRequest).then(fetchResponse => {
//         if (!fetchResponse || fetchResponse.status === 401 || fetchResponse.status === 302) {
//           return caches.match('/offline.html');
//         }

//         if (fetchResponse.status === 200 && fetchResponse.type === 'basic') {
//           const responseClone = fetchResponse.clone();
//           caches.open(CACHE_NAME).then(cache => {
//             cache.put(newRequest, responseClone); // fixed
//           });
//         }

//         return fetchResponse;
//       }).catch(() => {
//         if (event.request.mode === 'navigate') {
//           return caches.match('/offline.html');
//         }
//       });
//     })
//   );
// });


// self.addEventListener('fetch', event => {
//   // Hanya tangani permintaan GET
//   if (event.request.method !== 'GET') {
//     return;
//   }

//   event.respondWith(
//     caches.match(event.request).then(response => {
//       if (response) {
//         return response;
//       }

//       // Buat ulang request dengan header Accept: application/json
//       const newRequest = new Request(event.request.url, {
//         method: 'GET',
//         headers: new Headers({
//           'Accept': 'application/json'
//         }),
//         redirect: 'follow',
//         credentials: 'include' // penting jika pakai auth cookie Laravel
//       });

//       return fetch(newRequest).then(fetchResponse => {
//         // Tangani response yang tidak sukses
//         if (!fetchResponse || fetchResponse.status === 401 || fetchResponse.status === 302) {
//           // Bisa arahkan ke offline page, atau abaikan saja
//           return caches.match('/offline.html');
//         }

//         // Simpan response ke cache jika valid
//         if (fetchResponse.status === 200 && fetchResponse.type === 'basic') {
//           const responseClone = fetchResponse.clone();
//           caches.open(CACHE_NAME).then(cache => {
//             cache.put(event.request, responseClone);
//           });
//         }

//         return fetchResponse;
//       }).catch(() => {
//         // Jika fetch gagal dan ini adalah permintaan halaman navigasi
//         if (event.request.mode === 'navigate') {
//           return caches.match('/offline.html');
//         }
//       });
//     })
//   );
// });


// self.addEventListener('fetch', event => {
//   event.respondWith(
//     caches.match(event.request).then(response => {
//       if (response) {
//         return response;
//       }
//       // Jangan cache selain GET
//       if (event.request.method !== 'GET') {
//         return fetch(event.request);
//       }

//       return fetch(event.request, { redirect: 'follow' }).then(fetchResponse => {
//         if (!fetchResponse || fetchResponse.status !== 200 || fetchResponse.type !== 'basic') {
//           return fetchResponse;
//         }
//         const responseClone = fetchResponse.clone();
//         caches.open(CACHE_NAME).then(cache => {
//           cache.put(event.request, responseClone);
//         });
//         return fetchResponse;
//       }).catch(() => {
//         if (event.request.mode === 'navigate') {
//           return caches.match('/offline.html');
//         }
//       });
//     })
//   );
// });

// self.addEventListener('fetch', event => {
//   event.respondWith(
//     caches.match(event.request).then(cachedResponse => {
//       if (cachedResponse) {
//         return cachedResponse;
//       }

//       // Jangan cache POST atau method selain GET
//       if (event.request.method !== 'GET') {
//         return fetch(event.request);
//       }

//       // Fetch dengan opsi redirect: 'follow' supaya response redirect ditangani otomatis
//       return fetch(event.request, { redirect: 'follow' }).then(fetchResponse => {
//         // Response body hanya bisa dipakai sekali,
//         // clone harus dilakukan sebelum consume
//         if (!fetchResponse || fetchResponse.status !== 200 || fetchResponse.type !== 'basic') {
//           return fetchResponse;
//         }

//         const responseClone = fetchResponse.clone();

//         caches.open(CACHE_NAME).then(cache => {
//           cache.put(event.request, responseClone);
//         });

//         return fetchResponse;
//       }).catch(() => {
//         if (event.request.mode === 'navigate') {
//           return caches.match('/offline.html');
//         }
//       });
//     })
//   );
// });


// self.addEventListener('fetch', event => {
//   // if (event.request.method !== 'GET') return;
//     if (event.request.method !== 'GET') {
//     // jangan cache POST, PUT, DELETE, dll
//     return event.respondWith(fetch(event.request));
//   }

//   event.respondWith(
//     caches.match(event.request).then(response => {
//       if (response) {
//         return response;
//       }

//       if (!event.request.url.startsWith(self.location.origin)) {
//         return fetch(event.request);
//       }

//       return fetch(event.request).then(fetchResponse => {
//         // Jika response redirect, jangan cache
//         if (fetchResponse.redirected) {
//           return fetchResponse;
//         }

//         // Cache hanya response yang OK (status 200)
//         if (fetchResponse.ok) {
//           caches.open(CACHE_NAME).then(cache => {
//             cache.put(event.request, fetchResponse.clone());
//           });
//         }

//         return fetchResponse;
//       }).catch(() => {
//         if (event.request.mode === 'navigate') {
//           return caches.match('/offline.html');
//         }
//       });
//     })
//   );
// });


// self.addEventListener('fetch', event => { ///////INI BETULLLLLLLLLLLLLLL
//     // Hanya tangani GET request
//     if (event.request.method !== 'GET') return;

//     event.respondWith(
//         caches.match(event.request).then(response => {
//             if (response) {
//                 return response; // return cache if found
//             }

//             // Jangan cache request ke luar domain
//             if (!event.request.url.startsWith(self.location.origin)) {
//                 return fetch(event.request);
//             }

//             return fetch(event.request).then(fetchResponse => {
//                 return caches.open(CACHE_NAME).then(cache => {
//                     cache.put(event.request, fetchResponse.clone());
//                     return fetchResponse;
//                 });
//             }).catch(() => {
//                 // fallback jika offline
//                 if (event.request.mode === 'navigate') {
//                     return caches.match('/offline.html');
//                 }
//             });
//         })
//     );
// });


// self.addEventListener('fetch', event => {
//     event.respondWith(
//         caches.match(event.request).then(response => {
//             if (response) {
//                 return response; // return cache if found
//             }

//             if (!event.request.url.startsWith(self.location.origin)) {
//                 return fetch(event.request);
//             }
//             return fetch(event.request).then(fetchResponse => {
//                 return caches.open(CACHE_NAME).then(cache => {
//                     cache.put(event.request, fetchResponse.clone());
//                     return fetchResponse;
//                 });
//             }).catch(() => {
//                 // fallback to offline.html if fetch fails (offline mode)
//                 if (event.request.mode === 'navigate') {
//                     return caches.match('/offline.html');
//                 }
//             });
//         })
//     );
// });

// self.addEventListener("install", event => {
//     event.waitUntil(
//         caches.open(CACHE_NAME).then(cache => cache.addAll(filesToCache))
//     );
//     self.skipWaiting();
// });

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