<footer>
     <section class="section-login-footer">
          <div class="show-admin-btn">
                    <a href="#admin-form" class="anchor-scroll"><i class="fas fa-user"></i></a>
                    <span class="info-form-admin">May & Augustin - Admin</span>
                    <span class="info-form-admin-2">
                         <button><i class="far fa-times-circle"></i>Close</button>
                    </span>
          </div>
          <div class="login-admin-form">
               <form action="assets/pages/portals/controller/login.php" method="POST">
                    <div>
                         <img src="assets/pictures/portals/login.png" alt="Login form picture">
                    </div>
                    <div class="fields-login-form">
                         <div>
                              <input type="text" placeholder="Username" name="username">
                         </div>
                         <div>
                              <input type="password" placeholder="Password" name="password">
                         </div>
                         <div>
                              <input type="submit" value="Login">
                         </div>
                    </div>
               </form>
          </div>
     </section>
     <div id="admin-form"></div>
     <section class="section-copyright-footer">
          <p>© <?php echo date('Y'); ?> / May & Augustin</p>
     </section>  
</footer>

     <!-- Bootstrap & jQuery -->
     <script src="assets/js/libraries/jquery-3.5.1.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>
     <!-- Font Awesome -->
     <script src="https://kit.fontawesome.com/f1c8fa9f91.js" crossorigin="anonymous"></script>
     <!-- My scripts -->
     <script src="assets/js/scripts.min.js"></script>
</body>
</html>