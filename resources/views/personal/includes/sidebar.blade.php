  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">


      <!-- Sidebar -->
      <div class="sidebar">
          <ul class="pt-3 nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
              data-accordion="false">
              <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
              {{-- ПОСТЫ --}}
              <li class="nav-item">
                  <a href="{{ route('personal.main.index') }}" class="nav-link">
                    <i class="fa-solid fa-lock"></i>
                      <p>
                          Главная
                      </p>
                  </a>
              </li>
              <li class="nav-item">
                  <a href="{{ route('personal.liked.index') }}" class="nav-link">
                    <i class="fa-solid fa-heart"></i>
                      <p>
                          Понравившиеся посты
                      </p>
                  </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('personal.comment.index') }}" class="nav-link">
                    <i class="fa-solid fa-comment"></i>
                    <p>
                        Комментарии
                    </p>
                </a>
            </li>

          </ul>
      </div>
      <!-- /.sidebar -->
  </aside>
