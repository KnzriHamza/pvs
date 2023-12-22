
<x-app-layout>
    <header class="navbar navbar-expand-md d-print-none" data-bs-theme="dark">
            <div class="container-xl">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu" aria-controls="navbar-menu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <h1 class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3">
                <a href=".">
                  <img src="./static/logo.svg" width="110" height="32" alt="Tabler" class="navbar-brand-image">
                </a>
              </h1>
              <div class="navbar-nav flex-row order-md-last">
                <div class="nav-item d-none d-md-flex me-3">
                  <div class="btn-list">
                    <a href="https://github.com/tabler/tabler" class="btn" target="_blank" rel="noreferrer">
                      <!-- Download SVG icon from http://tabler-icons.io/i/brand-github -->
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M9 19c-4.3 1.4 -4.3 -2.5 -6 -3m12 5v-3.5c0 -1 .1 -1.4 -.5 -2c2.8 -.3 5.5 -1.4 5.5 -6a4.6 4.6 0 0 0 -1.3 -3.2a4.2 4.2 0 0 0 -.1 -3.2s-1.1 -.3 -3.5 1.3a12.3 12.3 0 0 0 -6.2 0c-2.4 -1.6 -3.5 -1.3 -3.5 -1.3a4.2 4.2 0 0 0 -.1 3.2a4.6 4.6 0 0 0 -1.3 3.2c0 4.6 2.7 5.7 5.5 6c-.6 .6 -.6 1.2 -.5 2v3.5"></path></svg>
                      Source code
                    </a>
                    <a href="https://github.com/sponsors/codecalm" class="btn" target="_blank" rel="noreferrer">
                      <!-- Download SVG icon from http://tabler-icons.io/i/heart -->
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon text-pink" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572"></path></svg>
                      Sponsor
                    </a>
                  </div>
                </div>
                <div class="d-none d-md-flex">
                  <a href="?theme=dark" class="nav-link px-0 hide-theme-dark" data-bs-toggle="tooltip" data-bs-placement="bottom" aria-label="Enable dark mode" data-bs-original-title="Enable dark mode">
                    <!-- Download SVG icon from http://tabler-icons.io/i/moon -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M12 3c.132 0 .263 0 .393 0a7.5 7.5 0 0 0 7.92 12.446a9 9 0 1 1 -8.313 -12.454z"></path></svg>
                  </a>
                  <a href="?theme=light" class="nav-link px-0 hide-theme-light" data-bs-toggle="tooltip" data-bs-placement="bottom" aria-label="Enable light mode" data-bs-original-title="Enable light mode">
                    <!-- Download SVG icon from http://tabler-icons.io/i/sun -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M12 12m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0"></path><path d="M3 12h1m8 -9v1m8 8h1m-9 8v1m-6.4 -15.4l.7 .7m12.1 -.7l-.7 .7m0 11.4l.7 .7m-12.1 -.7l-.7 .7"></path></svg>
                  </a>
                  <div class="nav-item dropdown d-none d-md-flex me-3">
                    <a href="#" class="nav-link px-0" data-bs-toggle="dropdown" tabindex="-1" aria-label="Show notifications">
                      <!-- Download SVG icon from http://tabler-icons.io/i/bell -->
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M10 5a2 2 0 1 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6"></path><path d="M9 17v1a3 3 0 0 0 6 0v-1"></path></svg>
                      <span class="badge bg-red"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-end dropdown-menu-card">
                      <div class="card">
                        <div class="card-header">
                          <h3 class="card-title">Last updates</h3>
                        </div>
                        <div class="list-group list-group-flush list-group-hoverable">
                          <div class="list-group-item">
                            <div class="row align-items-center">
                              <div class="col-auto"><span class="status-dot status-dot-animated bg-red d-block"></span></div>
                              <div class="col text-truncate">
                                <a href="#" class="text-body d-block">Example 1</a>
                                <div class="d-block text-secondary text-truncate mt-n1">
                                  Change deprecated html tags to text decoration classes (#29604)
                                </div>
                              </div>
                              <div class="col-auto">
                                <a href="#" class="list-group-item-actions">
                                  <!-- Download SVG icon from http://tabler-icons.io/i/star -->
                                  <svg xmlns="http://www.w3.org/2000/svg" class="icon text-muted" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z"></path></svg>
                                </a>
                              </div>
                            </div>
                          </div>
                          <div class="list-group-item">
                            <div class="row align-items-center">
                              <div class="col-auto"><span class="status-dot d-block"></span></div>
                              <div class="col text-truncate">
                                <a href="#" class="text-body d-block">Example 2</a>
                                <div class="d-block text-secondary text-truncate mt-n1">
                                  justify-content:between ⇒ justify-content:space-between (#29734)
                                </div>
                              </div>
                              <div class="col-auto">
                                <a href="#" class="list-group-item-actions show">
                                  <!-- Download SVG icon from http://tabler-icons.io/i/star -->
                                  <svg xmlns="http://www.w3.org/2000/svg" class="icon text-yellow" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z"></path></svg>
                                </a>
                              </div>
                            </div>
                          </div>
                          <div class="list-group-item">
                            <div class="row align-items-center">
                              <div class="col-auto"><span class="status-dot d-block"></span></div>
                              <div class="col text-truncate">
                                <a href="#" class="text-body d-block">Example 3</a>
                                <div class="d-block text-secondary text-truncate mt-n1">
                                  Update change-version.js (#29736)
                                </div>
                              </div>
                              <div class="col-auto">
                                <a href="#" class="list-group-item-actions">
                                  <!-- Download SVG icon from http://tabler-icons.io/i/star -->
                                  <svg xmlns="http://www.w3.org/2000/svg" class="icon text-muted" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z"></path></svg>
                                </a>
                              </div>
                            </div>
                          </div>
                          <div class="list-group-item">
                            <div class="row align-items-center">
                              <div class="col-auto"><span class="status-dot status-dot-animated bg-green d-block"></span></div>
                              <div class="col text-truncate">
                                <a href="#" class="text-body d-block">Example 4</a>
                                <div class="d-block text-secondary text-truncate mt-n1">
                                  Regenerate package-lock.json (#29730)
                                </div>
                              </div>
                              <div class="col-auto">
                                <a href="#" class="list-group-item-actions">
                                  <!-- Download SVG icon from http://tabler-icons.io/i/star -->
                                  <svg xmlns="http://www.w3.org/2000/svg" class="icon text-muted" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z"></path></svg>
                                </a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="nav-item dropdown">
                  <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown" aria-label="Open user menu">
                    <span class="avatar avatar-sm" style="background-image: url(./static/avatars/000m.jpg)"></span>
                    <div class="d-none d-xl-block ps-2">
                      <div>Paweł Kuna</div>
                      <div class="mt-1 small text-secondary">UI Designer</div>
                    </div>
                  </a>
                  <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow" data-bs-theme="light">
                    <a href="#" class="dropdown-item">Status</a>
                    <a href="./profile.html" class="dropdown-item">Profile</a>
                    <a href="#" class="dropdown-item">Feedback</a>
                    <div class="dropdown-divider"></div>
                    <a href="./settings.html" class="dropdown-item">Settings</a>
                    <a href="./sign-in.html" class="dropdown-item">Logout</a>
                  </div>
                </div>
              </div>
            </div>
          </header>
    
    
    
    
    
    
    
          <header class="navbar-expand-md">
            <div class="collapse navbar-collapse" id="navbar-menu">
              <div class="navbar">
                <div class="container-xl">
                  <ul class="navbar-nav">
                    <li class="nav-item">
                      <a class="nav-link" href="./">
                        <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M5 12l-2 0l9 -9l9 9l-2 0"></path><path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7"></path><path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6"></path></svg>
                        </span>
                        <span class="nav-link-title">
                          Home
                        </span>
                      </a>
                    </li>
                    
                  </ul>
                  <div class="my-2 my-md-0 flex-grow-1 flex-md-grow-0 order-first order-md-last">
                    <form action="./" method="get" autocomplete="off" novalidate="">
                      <div class="input-icon">
                        <span class="input-icon-addon">
                          <!-- Download SVG icon from http://tabler-icons.io/i/search -->
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0"></path><path d="M21 21l-6 -6"></path></svg>
                        </span>
                        <input type="text" value="" class="form-control" placeholder="Search…" aria-label="Search in website">
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </header>
    
    
    
    
    
          <div class="page-wrapper">
            <!-- Page header -->
            <div class="page-header d-print-none">
              <div class="container-xl">
                <div class="row g-2 align-items-center">
                  <div class="col">
                    <h2 class="page-title">
                      Accoasdasrdion
                    </h2>
                  </div>
                </div>
              </div>
            </div>
            <!-- Page body -->
            <div class="page-body">
                <div class="container-xl">
                  <div class="row row-cols-6 g-3">
                    <div class="col">
                      <a data-fslightbox="gallery" href="./static/photos/beautiful-blonde-woman-relaxing-with-a-can-of-coke-on-a-tree-stump-by-the-beach.jpg">
                        <!-- Photo -->
                        <div class="img-responsive img-responsive-1x1 rounded border" style="background-image: url(./static/photos/beautiful-blonde-woman-relaxing-with-a-can-of-coke-on-a-tree-stump-by-the-beach.jpg)"></div>
                      </a>
                    </div>
                    <div class="col">
                      <a data-fslightbox="gallery" href="https://oaidalleapiprodscus.blob.core.windows.net/private/org-aUCAmzVj443ZJDtMssBgJyju/user-wq7WOoG5LzlSXlr1RpKZDyFY/img-TqV71eiOQrHJ3WzaY7Mtjixh.png?st=2023-12-22T01%3A18%3A55Z&se=2023-12-22T03%3A18%3A55Z&sp=r&sv=2021-08-06&sr=b&rscd=inline&rsct=image/png&skoid=6aaadede-4fb3-4698-a8f6-684d7786b067&sktid=a48cca56-e6da-484e-a814-9c849652bcb3&skt=2023-12-21T23%3A05%3A44Z&ske=2023-12-22T23%3A05%3A44Z&sks=b&skv=2021-08-06&sig=5QzW8JFEclBlB3wy5mgZHtD0tDSpOZxnN/aeyYiGt24%3D">
                        <!-- Photo -->
                        <div class="img-responsive img-responsive-1x1 rounded border" style="background-image: url(https://oaidalleapiprodscus.blob.core.windows.net/private/org-aUCAmzVj443ZJDtMssBgJyju/user-wq7WOoG5LzlSXlr1RpKZDyFY/img-TqV71eiOQrHJ3WzaY7Mtjixh.png?st=2023-12-22T01%3A18%3A55Z&se=2023-12-22T03%3A18%3A55Z&sp=r&sv=2021-08-06&sr=b&rscd=inline&rsct=image/png&skoid=6aaadede-4fb3-4698-a8f6-684d7786b067&sktid=a48cca56-e6da-484e-a814-9c849652bcb3&skt=2023-12-21T23%3A05%3A44Z&ske=2023-12-22T23%3A05%3A44Z&sks=b&skv=2021-08-06&sig=5QzW8JFEclBlB3wy5mgZHtD0tDSpOZxnN/aeyYiGt24%3D)"></div>
                      </a>
                    </div>
                    <div class="col">
                      <a data-fslightbox="gallery" href="./static/photos/finances-us-dollars-and-bitcoins-currency-money.jpg">
                        <!-- Photo -->
                        <div class="img-responsive img-responsive-1x1 rounded border" style="background-image: url(./static/photos/finances-us-dollars-and-bitcoins-currency-money.jpg)"></div>
                      </a>
                    </div>
                    <div class="col">
                      <a data-fslightbox="gallery" href="./static/photos/group-of-people-brainstorming-and-taking-notes-2.jpg">
                        <!-- Photo -->
                        <div class="img-responsive img-responsive-1x1 rounded border" style="background-image: url(./static/photos/group-of-people-brainstorming-and-taking-notes-2.jpg)"></div>
                      </a>
                    </div>
                    <div class="col">
                      <a data-fslightbox="gallery" href="./static/photos/blue-sofa-with-pillows-in-a-designer-living-room-interior.jpg">
                        <!-- Photo -->
                        <div class="img-responsive img-responsive-1x1 rounded border" style="background-image: url(./static/photos/blue-sofa-with-pillows-in-a-designer-living-room-interior.jpg)"></div>
                      </a>
                    </div>
                    <div class="col">
                      <a data-fslightbox="gallery" href="./static/photos/home-office-desk-with-macbook-iphone-calendar-watch-and-organizer.jpg">
                        <!-- Photo -->
                        <div class="img-responsive img-responsive-1x1 rounded border" style="background-image: url(./static/photos/home-office-desk-with-macbook-iphone-calendar-watch-and-organizer.jpg)"></div>
                      </a>
                    </div>
                    <div class="col">
                      <a data-fslightbox="gallery" href="./static/photos/young-woman-working-in-a-cafe.jpg">
                        <!-- Photo -->
                        <div class="img-responsive img-responsive-1x1 rounded border" style="background-image: url(./static/photos/young-woman-working-in-a-cafe.jpg)"></div>
                      </a>
                    </div>
                    <div class="col">
                      <a data-fslightbox="gallery" href="./static/photos/everything-you-need-to-work-from-your-bed.jpg">
                        <!-- Photo -->
                        <div class="img-responsive img-responsive-1x1 rounded border" style="background-image: url(./static/photos/everything-you-need-to-work-from-your-bed.jpg)"></div>
                      </a>
                    </div>
                    <div class="col">
                      <a data-fslightbox="gallery" href="./static/photos/young-entrepreneur-working-from-a-modern-cafe.jpg">
                        <!-- Photo -->
                        <div class="img-responsive img-responsive-1x1 rounded border" style="background-image: url(./static/photos/young-entrepreneur-working-from-a-modern-cafe.jpg)"></div>
                      </a>
                    </div>
                    <div class="col">
                      <a data-fslightbox="gallery" href="./static/photos/finances-us-dollars-and-bitcoins-currency-money-2.jpg">
                        <!-- Photo -->
                        <div class="img-responsive img-responsive-1x1 rounded border" style="background-image: url(./static/photos/finances-us-dollars-and-bitcoins-currency-money-2.jpg)"></div>
                      </a>
                    </div>
                    <div class="col">
                      <a data-fslightbox="gallery" href="./static/photos/group-of-people-sightseeing-in-the-city.jpg">
                        <!-- Photo -->
                        <div class="img-responsive img-responsive-1x1 rounded border" style="background-image: url(./static/photos/group-of-people-sightseeing-in-the-city.jpg)"></div>
                      </a>
                    </div>
                    <div class="col">
                      <a data-fslightbox="gallery" href="./static/photos/color-palette-guide-sample-colors-catalog-.jpg">
                        <!-- Photo -->
                        <div class="img-responsive img-responsive-1x1 rounded border" style="background-image: url(./static/photos/color-palette-guide-sample-colors-catalog-.jpg)"></div>
                      </a>
                    </div>
                    <div class="col">
                      <a data-fslightbox="gallery" href="./static/photos/stylish-workplace-with-computer-at-home.jpg">
                        <!-- Photo -->
                        <div class="img-responsive img-responsive-1x1 rounded border" style="background-image: url(./static/photos/stylish-workplace-with-computer-at-home.jpg)"></div>
                      </a>
                    </div>
                    <div class="col">
                      <a data-fslightbox="gallery" href="./static/photos/pink-desk-in-the-home-office.jpg">
                        <!-- Photo -->
                        <div class="img-responsive img-responsive-1x1 rounded border" style="background-image: url(./static/photos/pink-desk-in-the-home-office.jpg)"></div>
                      </a>
                    </div>
                    <div class="col">
                      <a data-fslightbox="gallery" href="./static/photos/young-woman-sitting-on-the-sofa-and-working-on-her-laptop.jpg">
                        <!-- Photo -->
                        <div class="img-responsive img-responsive-1x1 rounded border" style="background-image: url(./static/photos/young-woman-sitting-on-the-sofa-and-working-on-her-laptop.jpg)"></div>
                      </a>
                    </div>
                    <div class="col">
                      <a data-fslightbox="gallery" href="./static/photos/coffee-on-a-table-with-other-items.jpg">
                        <!-- Photo -->
                        <div class="img-responsive img-responsive-1x1 rounded border" style="background-image: url(./static/photos/coffee-on-a-table-with-other-items.jpg)"></div>
                      </a>
                    </div>
                    <div class="col">
                      <a data-fslightbox="gallery" href="./static/photos/young-entrepreneur-working-from-a-modern-cafe-2.jpg">
                        <!-- Photo -->
                        <div class="img-responsive img-responsive-1x1 rounded border" style="background-image: url(./static/photos/young-entrepreneur-working-from-a-modern-cafe-2.jpg)"></div>
                      </a>
                    </div>
                    <div class="col">
                      <a data-fslightbox="gallery" href="./static/photos/soft-photo-of-woman-on-the-bed-with-the-book-and-cup-of-coffee-in-hands.jpg">
                        <!-- Photo -->
                        <div class="img-responsive img-responsive-1x1 rounded border" style="background-image: url(./static/photos/soft-photo-of-woman-on-the-bed-with-the-book-and-cup-of-coffee-in-hands.jpg)"></div>
                      </a>
                    </div>
                    <div class="col">
                      <a data-fslightbox="gallery" href="./static/photos/fairy-lights-at-the-beach-in-bulgaria.jpg">
                        <!-- Photo -->
                        <div class="img-responsive img-responsive-1x1 rounded border" style="background-image: url(./static/photos/fairy-lights-at-the-beach-in-bulgaria.jpg)"></div>
                      </a>
                    </div>
                    <div class="col">
                      <a data-fslightbox="gallery" href="./static/photos/woman-working-on-laptop-at-home-office.jpg">
                        <!-- Photo -->
                        <div class="img-responsive img-responsive-1x1 rounded border" style="background-image: url(./static/photos/woman-working-on-laptop-at-home-office.jpg)"></div>
                      </a>
                    </div>
                    <div class="col">
                      <a data-fslightbox="gallery" href="./static/photos/modern-home-office.jpg">
                        <!-- Photo -->
                        <div class="img-responsive img-responsive-1x1 rounded border" style="background-image: url(./static/photos/modern-home-office.jpg)"></div>
                      </a>
                    </div>
                    <div class="col">
                      <a data-fslightbox="gallery" href="./static/photos/blond-using-her-laptop-at-her-bedroom.jpg">
                        <!-- Photo -->
                        <div class="img-responsive img-responsive-1x1 rounded border" style="background-image: url(./static/photos/blond-using-her-laptop-at-her-bedroom.jpg)"></div>
                      </a>
                    </div>
                    <div class="col">
                      <a data-fslightbox="gallery" href="./static/photos/tropical-palm-leaves-floral-pattern-background.jpg">
                        <!-- Photo -->
                        <div class="img-responsive img-responsive-1x1 rounded border" style="background-image: url(./static/photos/tropical-palm-leaves-floral-pattern-background.jpg)"></div>
                      </a>
                    </div>
                    <div class="col">
                      <a data-fslightbox="gallery" href="./static/photos/woman-read-book-and-drink-coffee.jpg">
                        <!-- Photo -->
                        <div class="img-responsive img-responsive-1x1 rounded border" style="background-image: url(./static/photos/woman-read-book-and-drink-coffee.jpg)"></div>
                      </a>
                    </div>
                    <div class="col">
                      <a data-fslightbox="gallery" href="./static/photos/book-on-the-grass.jpg">
                        <!-- Photo -->
                        <div class="img-responsive img-responsive-1x1 rounded border" style="background-image: url(./static/photos/book-on-the-grass.jpg)"></div>
                      </a>
                    </div>
                    <div class="col">
                      <a data-fslightbox="gallery" href="./static/photos/colorful-exotic-flowers-and-greenery.jpg">
                        <!-- Photo -->
                        <div class="img-responsive img-responsive-1x1 rounded border" style="background-image: url(./static/photos/colorful-exotic-flowers-and-greenery.jpg)"></div>
                      </a>
                    </div>
                    <div class="col">
                      <a data-fslightbox="gallery" href="./static/photos/workplace-with-laptop-on-table-at-home.jpg">
                        <!-- Photo -->
                        <div class="img-responsive img-responsive-1x1 rounded border" style="background-image: url(./static/photos/workplace-with-laptop-on-table-at-home.jpg)"></div>
                      </a>
                    </div>
                    <div class="col">
                      <a data-fslightbox="gallery" href="./static/photos/city-lights-reflected-in-the-water-at-night.jpg">
                        <!-- Photo -->
                        <div class="img-responsive img-responsive-1x1 rounded border" style="background-image: url(./static/photos/city-lights-reflected-in-the-water-at-night.jpg)"></div>
                      </a>
                    </div>
                    <div class="col">
                      <a data-fslightbox="gallery" href="./static/photos/cryptocurrency-bitcoin-coins.jpg">
                        <!-- Photo -->
                        <div class="img-responsive img-responsive-1x1 rounded border" style="background-image: url(./static/photos/cryptocurrency-bitcoin-coins.jpg)"></div>
                      </a>
                    </div>
                    <div class="col">
                      <a data-fslightbox="gallery" href="./static/photos/woman-read-book-and-drink-coffee-2.jpg">
                        <!-- Photo -->
                        <div class="img-responsive img-responsive-1x1 rounded border" style="background-image: url(./static/photos/woman-read-book-and-drink-coffee-2.jpg)"></div>
                      </a>
                    </div>
                    <div class="col">
                      <a data-fslightbox="gallery" href="./static/photos/friends-at-a-restaurant-drinking-wine.jpg">
                        <!-- Photo -->
                        <div class="img-responsive img-responsive-1x1 rounded border" style="background-image: url(./static/photos/friends-at-a-restaurant-drinking-wine.jpg)"></div>
                      </a>
                    </div>
                    <div class="col">
                      <a data-fslightbox="gallery" href="./static/photos/beautiful-blonde-woman-on-a-wooden-pier-by-the-lake.jpg">
                        <!-- Photo -->
                        <div class="img-responsive img-responsive-1x1 rounded border" style="background-image: url(./static/photos/beautiful-blonde-woman-on-a-wooden-pier-by-the-lake.jpg)"></div>
                      </a>
                    </div>
                    <div class="col">
                      <a data-fslightbox="gallery" href="./static/photos/white-apple-imac-computer-with-elephant-mousepad.jpg">
                        <!-- Photo -->
                        <div class="img-responsive img-responsive-1x1 rounded border" style="background-image: url(./static/photos/white-apple-imac-computer-with-elephant-mousepad.jpg)"></div>
                      </a>
                    </div>
                    <div class="col">
                      <a data-fslightbox="gallery" href="./static/photos/workplace-with-laptop-on-table-at-home-2.jpg">
                        <!-- Photo -->
                        <div class="img-responsive img-responsive-1x1 rounded border" style="background-image: url(./static/photos/workplace-with-laptop-on-table-at-home-2.jpg)"></div>
                      </a>
                    </div>
                    <div class="col">
                      <a data-fslightbox="gallery" href="./static/photos/working-in-a-restaurant-macbook-cheese-cake-and-cup-of-coffee.jpg">
                        <!-- Photo -->
                        <div class="img-responsive img-responsive-1x1 rounded border" style="background-image: url(./static/photos/working-in-a-restaurant-macbook-cheese-cake-and-cup-of-coffee.jpg)"></div>
                      </a>
                    </div>
                    <div class="col">
                      <a data-fslightbox="gallery" href="./static/photos/young-woman-sitting-on-the-sofa-and-working-on-her-laptop-2.jpg">
                        <!-- Photo -->
                        <div class="img-responsive img-responsive-1x1 rounded border" style="background-image: url(./static/photos/young-woman-sitting-on-the-sofa-and-working-on-her-laptop-2.jpg)"></div>
                      </a>
                    </div>
                    <div class="col">
                      <a data-fslightbox="gallery" href="./static/photos/brainstorming-session-with-creative-designers-2.jpg">
                        <!-- Photo -->
                        <div class="img-responsive img-responsive-1x1 rounded border" style="background-image: url(./static/photos/brainstorming-session-with-creative-designers-2.jpg)"></div>
                      </a>
                    </div>
                    <div class="col">
                      <a data-fslightbox="gallery" href="./static/photos/woman-drinking-hot-tea-in-her-home-office.jpg">
                        <!-- Photo -->
                        <div class="img-responsive img-responsive-1x1 rounded border" style="background-image: url(./static/photos/woman-drinking-hot-tea-in-her-home-office.jpg)"></div>
                      </a>
                    </div>
                    <div class="col">
                      <a data-fslightbox="gallery" href="./static/photos/stylish-workspace-with-macbook-pro.jpg">
                        <!-- Photo -->
                        <div class="img-responsive img-responsive-1x1 rounded border" style="background-image: url(./static/photos/stylish-workspace-with-macbook-pro.jpg)"></div>
                      </a>
                    </div>
                    <div class="col">
                      <a data-fslightbox="gallery" href="./static/photos/people-by-a-banquet-table-full-with-food.jpg">
                        <!-- Photo -->
                        <div class="img-responsive img-responsive-1x1 rounded border" style="background-image: url(./static/photos/people-by-a-banquet-table-full-with-food.jpg)"></div>
                      </a>
                    </div>
                    <div class="col">
                      <a data-fslightbox="gallery" href="./static/photos/woman-working-on-a-laptop-while-enjoying-a-breakfast-coffee-and-chocolate-in-bed.jpg">
                        <!-- Photo -->
                        <div class="img-responsive img-responsive-1x1 rounded border" style="background-image: url(./static/photos/woman-working-on-a-laptop-while-enjoying-a-breakfast-coffee-and-chocolate-in-bed.jpg)"></div>
                      </a>
                    </div>
                    <div class="col">
                      <a data-fslightbox="gallery" href="./static/photos/businesswoman-working-at-her-laptop.jpg">
                        <!-- Photo -->
                        <div class="img-responsive img-responsive-1x1 rounded border" style="background-image: url(./static/photos/businesswoman-working-at-her-laptop.jpg)"></div>
                      </a>
                    </div>
                    <div class="col">
                      <a data-fslightbox="gallery" href="./static/photos/finances-us-dollars-and-bitcoins-currency-money-5.jpg">
                        <!-- Photo -->
                        <div class="img-responsive img-responsive-1x1 rounded border" style="background-image: url(./static/photos/finances-us-dollars-and-bitcoins-currency-money-5.jpg)"></div>
                      </a>
                    </div>
                    <div class="col">
                      <a data-fslightbox="gallery" href="./static/photos/cup-of-coffee-on-table-in-cafe.jpg">
                        <!-- Photo -->
                        <div class="img-responsive img-responsive-1x1 rounded border" style="background-image: url(./static/photos/cup-of-coffee-on-table-in-cafe.jpg)"></div>
                      </a>
                    </div>
                    <div class="col">
                      <a data-fslightbox="gallery" href="./static/photos/young-woman-sitting-on-the-sofa-and-working-on-her-laptop-3.jpg">
                        <!-- Photo -->
                        <div class="img-responsive img-responsive-1x1 rounded border" style="background-image: url(./static/photos/young-woman-sitting-on-the-sofa-and-working-on-her-laptop-3.jpg)"></div>
                      </a>
                    </div>
                    <div class="col">
                      <a data-fslightbox="gallery" href="./static/photos/man-looking-out-to-sea.jpg">
                        <!-- Photo -->
                        <div class="img-responsive img-responsive-1x1 rounded border" style="background-image: url(./static/photos/man-looking-out-to-sea.jpg)"></div>
                      </a>
                    </div>
                    <div class="col">
                      <a data-fslightbox="gallery" href="./static/photos/cup-of-coffee-on-table-in-cafe-2.jpg">
                        <!-- Photo -->
                        <div class="img-responsive img-responsive-1x1 rounded border" style="background-image: url(./static/photos/cup-of-coffee-on-table-in-cafe-2.jpg)"></div>
                      </a>
                    </div>
                    <div class="col">
                      <a data-fslightbox="gallery" href="./static/photos/workplace-with-laptop-on-table-at-home-3.jpg">
                        <!-- Photo -->
                        <div class="img-responsive img-responsive-1x1 rounded border" style="background-image: url(./static/photos/workplace-with-laptop-on-table-at-home-3.jpg)"></div>
                      </a>
                    </div>
                    <div class="col">
                      <a data-fslightbox="gallery" href="./static/photos/businesswoman-working-at-her-laptop-2.jpg">
                        <!-- Photo -->
                        <div class="img-responsive img-responsive-1x1 rounded border" style="background-image: url(./static/photos/businesswoman-working-at-her-laptop-2.jpg)"></div>
                      </a>
                    </div>
                    <div class="col">
                      <a data-fslightbox="gallery" href="./static/photos/cup-of-coffee-and-an-open-book.jpg">
                        <!-- Photo -->
                        <div class="img-responsive img-responsive-1x1 rounded border" style="background-image: url(./static/photos/cup-of-coffee-and-an-open-book.jpg)"></div>
                      </a>
                    </div>
                    <div class="col">
                      <a data-fslightbox="gallery" href="./static/photos/group-of-people-brainstorming-and-taking-notes-4.jpg">
                        <!-- Photo -->
                        <div class="img-responsive img-responsive-1x1 rounded border" style="background-image: url(./static/photos/group-of-people-brainstorming-and-taking-notes-4.jpg)"></div>
                      </a>
                    </div>
                    <div class="col">
                      <a data-fslightbox="gallery" href="./static/photos/young-woman-sitting-on-the-sofa-and-working-on-her-laptop-4.jpg">
                        <!-- Photo -->
                        <div class="img-responsive img-responsive-1x1 rounded border" style="background-image: url(./static/photos/young-woman-sitting-on-the-sofa-and-working-on-her-laptop-4.jpg)"></div>
                      </a>
                    </div>
                    <div class="col">
                      <a data-fslightbox="gallery" href="./static/photos/making-magic-with-fairy-lights.jpg">
                        <!-- Photo -->
                        <div class="img-responsive img-responsive-1x1 rounded border" style="background-image: url(./static/photos/making-magic-with-fairy-lights.jpg)"></div>
                      </a>
                    </div>
                    <div class="col">
                      <a data-fslightbox="gallery" href="./static/photos/woman-working-on-a-laptop-while-enjoying-a-breakfast-coffee-and-chocolate-in-bed-2.jpg">
                        <!-- Photo -->
                        <div class="img-responsive img-responsive-1x1 rounded border" style="background-image: url(./static/photos/woman-working-on-a-laptop-while-enjoying-a-breakfast-coffee-and-chocolate-in-bed-2.jpg)"></div>
                      </a>
                    </div>
                    <div class="col">
                      <a data-fslightbox="gallery" href="./static/photos/woman-drinking-tea-and-reading-book.jpg">
                        <!-- Photo -->
                        <div class="img-responsive img-responsive-1x1 rounded border" style="background-image: url(./static/photos/woman-drinking-tea-and-reading-book.jpg)"></div>
                      </a>
                    </div>
                    <div class="col">
                      <a data-fslightbox="gallery" href="./static/photos/a-woman-works-at-a-desk-with-a-laptop-and-a-cup-of-coffee.jpg">
                        <!-- Photo -->
                        <div class="img-responsive img-responsive-1x1 rounded border" style="background-image: url(./static/photos/a-woman-works-at-a-desk-with-a-laptop-and-a-cup-of-coffee.jpg)"></div>
                      </a>
                    </div>
                    <div class="col">
                      <a data-fslightbox="gallery" href="./static/photos/everything-you-need-to-work-from-your-bed-2.jpg">
                        <!-- Photo -->
                        <div class="img-responsive img-responsive-1x1 rounded border" style="background-image: url(./static/photos/everything-you-need-to-work-from-your-bed-2.jpg)"></div>
                      </a>
                    </div>
                    <div class="col">
                      <a data-fslightbox="gallery" href="./static/photos/workplace-with-laptop-on-table-at-home-4.jpg">
                        <!-- Photo -->
                        <div class="img-responsive img-responsive-1x1 rounded border" style="background-image: url(./static/photos/workplace-with-laptop-on-table-at-home-4.jpg)"></div>
                      </a>
                    </div>
                    <div class="col">
                      <a data-fslightbox="gallery" href="./static/photos/stylish-workspace-with-macbook-pro-2.jpg">
                        <!-- Photo -->
                        <div class="img-responsive img-responsive-1x1 rounded border" style="background-image: url(./static/photos/stylish-workspace-with-macbook-pro-2.jpg)"></div>
                      </a>
                    </div>
                    <div class="col">
                      <a data-fslightbox="gallery" href="./static/photos/netflix-drug-lords-from-narcos.jpg">
                        <!-- Photo -->
                        <div class="img-responsive img-responsive-1x1 rounded border" style="background-image: url(./static/photos/netflix-drug-lords-from-narcos.jpg)"></div>
                      </a>
                    </div>
                    <div class="col">
                      <a data-fslightbox="gallery" href="./static/photos/stone-texture-high-resolution-background-2.jpg">
                        <!-- Photo -->
                        <div class="img-responsive img-responsive-1x1 rounded border" style="background-image: url(./static/photos/stone-texture-high-resolution-background-2.jpg)"></div>
                      </a>
                    </div>
                    <div class="col">
                      <a data-fslightbox="gallery" href="./static/photos/a-visit-to-the-bookstore.jpg">
                        <!-- Photo -->
                        <div class="img-responsive img-responsive-1x1 rounded border" style="background-image: url(./static/photos/a-visit-to-the-bookstore.jpg)"></div>
                      </a>
                    </div>
                    <div class="col">
                      <a data-fslightbox="gallery" href="./static/photos/books-and-purple-flowers-on-a-wooden-stool-by-the-bed.jpg">
                        <!-- Photo -->
                        <div class="img-responsive img-responsive-1x1 rounded border" style="background-image: url(./static/photos/books-and-purple-flowers-on-a-wooden-stool-by-the-bed.jpg)"></div>
                      </a>
                    </div>
                    <div class="col">
                      <a data-fslightbox="gallery" href="./static/photos/people-watching-a-presentation-in-a-room.jpg">
                        <!-- Photo -->
                        <div class="img-responsive img-responsive-1x1 rounded border" style="background-image: url(./static/photos/people-watching-a-presentation-in-a-room.jpg)"></div>
                      </a>
                    </div>
                    <div class="col">
                      <a data-fslightbox="gallery" href="./static/photos/home-office-laptop-organizer-and-cup-of-coffee.jpg">
                        <!-- Photo -->
                        <div class="img-responsive img-responsive-1x1 rounded border" style="background-image: url(./static/photos/home-office-laptop-organizer-and-cup-of-coffee.jpg)"></div>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            <footer class="footer footer-transparent d-print-none">
              <div class="container-xl">
                <div class="row text-center align-items-center flex-row-reverse">
                  <div class="col-lg-auto ms-lg-auto">
                    <ul class="list-inline list-inline-dots mb-0">
                      <li class="list-inline-item"><a href="https://tabler.io/docs" target="_blank" class="link-secondary" rel="noopener">Documentation</a></li>
                      <li class="list-inline-item"><a href="./license.html" class="link-secondary">License</a></li>
                      <li class="list-inline-item"><a href="https://github.com/tabler/tabler" target="_blank" class="link-secondary" rel="noopener">Source code</a></li>
                      <li class="list-inline-item">
                        <a href="https://github.com/sponsors/codecalm" target="_blank" class="link-secondary" rel="noopener">
                          <!-- Download SVG icon from http://tabler-icons.io/i/heart -->
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon text-pink icon-filled icon-inline" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572"></path></svg>
                          Sponsor
                        </a>
                      </li>
                    </ul>
                  </div>
                  <div class="col-12 col-lg-auto mt-3 mt-lg-0">
                    <ul class="list-inline list-inline-dots mb-0">
                      <li class="list-inline-item">
                        Copyright © 2023
                        <a href="." class="link-secondary">Tabler</a>.
                        All rights reserved.
                      </li>
                      <li class="list-inline-item">
                        <a href="./changelog.html" class="link-secondary" rel="noopener">
                          v1.0.0-beta19
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </footer>
          </div>
    </x-app-layout>
    
    