
 <footer>
    <div class="footer-top">
      <div class="container">
        <div class="list-footer">
          <div class="logo-dc">
            <img src="../img/dc-logo-bg.png" alt="" />
          </div>
          <div class="list">
            <h2>DC COMICS</h2>
            <ul>
              @foreach ($dcComics as $item)
              <li>
                <a href="">{{ $item }}</a>
              </li>
                  
              @endforeach
            </ul>
            <h2>SHOP</h2>
            <ul>
              @foreach ($shop as $item)
              <li>
                <a href="">{{ $item }}</a>
              </li>     
              @endforeach
            </ul>
          </div>
          <div class="list">
            <h2>DC</h2>
            <ul>
              @foreach ($dc as $item)
              <li >
                <a href="">{{ $item }}</a>
              </li>    
              @endforeach
            </ul>
          </div>
          <div class="list">
            <h2>SITES</h2>
            <ul>
              @foreach ($sites as $site)
              <li>
                <a href="">{{ $site }}</a>
              </li>           
              @endforeach
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      <div class="container">
        <p class="btn">SIGN-UP NOW!</p>
        <nav>
          <ul>
            <li>FOLLOW US</li>
            <li>
              <a href=""><img src="{{Vite::asset('resource/img/footer-facebook.png')}}" alt="" /></a>
            </li>
            <li>
              <a href=""></a><img src="../img/footer-twitter.png" alt="" />
            </li>
            <li>
              <a href=""></a><img src="../img/footer-youtube.png" alt="" />
            </li>
            <li>
              <a href=""></a><img src="../img/footer-pinterest.png" alt="" />
            </li>
            <li>
              <a href=""></a><img src="../img/footer-periscope.png" alt="" />
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </footer>