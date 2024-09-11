<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <link rel="stylesheet" href="/Практика/styles.css">
   <!-- <link rel="stylesheet" media="screen and (max-width: 600px)" href="small-screen.css"> -->
</head>
<body>
   <header class="header">
      <div class="header__top">
         <img src="/Практика/images/herb.png" alt="Herb photo">
      </div>
      <h1 class="header__title">
         Фінансовий відділ
      </h1>
      <div class="line"></div>
      <div class="header__adress">
         <div class="header__area">
            смт Залізці, вул. Шевченка, 64
         </div>
         <div class="header__village">
            Залозецька громада
         </div>
      </div>
   </header>

   <main class="main">
   <div class="main__search">
        <h1 class="text__search">Пошук реквізитів доходних рахунків</h1>
        <form id="searchForm">
            <div class="main__enter">
                <label for="query">Введіть Код класифікації або Найменування податку:</label>
            </div>
            <div class="main__search_button">
                <input type="text" id="query" name="query" required autocomplete="off">
                <div class="button">
                <button type="submit">Знайти</button></div>
            </div>
        </form>
        <div id="searchResults"></div>
    </div>
    <div class="table-container">
    <script>
        function loadTable() {
            var xhr = new XMLHttpRequest();
            xhr.open('GET', '/Практика/backend/search.php', true);
            xhr.onload = function() {
                if (xhr.status === 200) {
                    document.getElementById('searchResults').innerHTML = xhr.responseText;
                } else {
                    console.error('Помилка запиту: ' + xhr.status);
                }
            };
            xhr.send();
        }

        

        document.getElementById('searchForm').addEventListener('submit', function(event) {
            event.preventDefault(); // Зупиняє звичайну відправку форми

            var query = document.getElementById('query').value;

            var xhr = new XMLHttpRequest();
            xhr.open('GET', '/Практика/backend/search.php?query=' + encodeURIComponent(query), true);
            xhr.onload = function() {
                if (xhr.status === 200) {
                    document.getElementById('searchResults').innerHTML = xhr.responseText;
                } else {
                    console.error('Помилка запиту: ' + xhr.status);
                }
            };
            xhr.send();
        });

        // Завантажити таблицю при завантаженні сторінки
        window.onload = loadTable;
    </script>
    </div>
     
   </main>

  <footer >
   <div class="footer">
   <div class="footer_numbers">
      Контактний телефон: 
      <br>
      Фінвідділ:
      <a href="tel:+380354031431" class="number__gol">+380 35 40 31 431</a>
   </div>
   <div class="footer__socialmedia">
      <div class="facebook">
      <a href="https://www.facebook.com/groups/3679582335481714/" target="_blank">
         <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="20" height="20" viewBox="0,0,256,256">
            <g fill="#fffcfc" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><g transform="scale(10.66667,10.66667)"><path d="M12,2c-5.511,0 -10,4.489 -10,10c0,5.511 4.489,10 10,10c5.511,0 10,-4.489 10,-10c0,-5.511 -4.489,-10 -10,-10zM12,4c4.43012,0 8,3.56988 8,8c0,4.01447 -2.93468,7.31302 -6.78125,7.89844v-5.51367h2.32813l0.36523,-2.36524h-2.69336v-1.29297c0,-0.983 0.32023,-1.85547 1.24023,-1.85547h1.47656v-2.06445c-0.26,-0.035 -0.8087,-0.11133 -1.8457,-0.11133c-2.166,0 -3.43555,1.144 -3.43555,3.75v1.57422h-2.22656v2.36524h2.22656v5.49414c-3.78401,-0.63806 -6.6543,-3.90867 -6.6543,-7.87891c0,-4.43012 3.56988,-8 8,-8z"></path></g></g>
            </svg>
      </a>
      </div>
      <a href="https://ua.linkedin.com/in/iryna-nyshta-4553a4301" target="_blank">
         <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="20" height="20" viewBox="0,0,256,256">
            <g fill="#fffcfc" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><g transform="scale(5.12,5.12)"><path d="M25,2c-12.69071,0 -23,10.3093 -23,23c0,12.6907 10.30929,23 23,23c12.69071,0 23,-10.3093 23,-23c0,-12.6907 -10.30929,-23 -23,-23zM25,4c11.60983,0 21,9.39017 21,21c0,11.60983 -9.39017,21 -21,21c-11.60983,0 -21,-9.39017 -21,-21c0,-11.60982 9.39017,-21 21,-21zM34.08789,14.03516c-0.684,0 -1.45256,0.15842 -2.35156,0.48242c-1.396,0.503 -17.81559,7.47458 -19.68359,8.26758c-1.068,0.454 -3.05664,1.2985 -3.05664,3.3125c0,1.335 0.78227,2.28984 2.32227,2.83984c0.828,0.295 2.79455,0.89108 3.93555,1.20508c0.484,0.133 0.99834,0.20117 1.52734,0.20117c1.035,0 2.07658,-0.25789 2.89258,-0.71289c-0.007,0.168 -0.00242,0.33781 0.01758,0.50781c0.123,1.05 0.77047,2.03758 1.73047,2.64258c0.628,0.396 5.75744,3.83291 6.52344,4.37891c1.076,0.769 2.2655,1.17578 3.4375,1.17578c2.24,0 2.99152,-2.31283 3.35352,-3.42383c0.525,-1.613 2.49089,-14.72997 2.71289,-17.04297c0.151,-1.585 -0.50958,-2.89019 -1.76758,-3.49219c-0.471,-0.227 -1.00875,-0.3418 -1.59375,-0.3418zM34.08789,16.03516c0.275,0 0.52052,0.04548 0.72852,0.14648c0.473,0.227 0.71363,0.73305 0.64063,1.49805c-0.242,2.523 -2.20309,15.32928 -2.62109,16.61328c-0.358,1.098 -0.73512,2.04297 -1.45313,2.04297c-0.718,0 -1.50239,-0.25169 -2.27539,-0.80469c-0.773,-0.552 -5.90614,-3.99436 -6.61914,-4.44336c-0.625,-0.394 -1.28647,-1.37617 -0.35547,-2.32617c0.767,-0.782 6.58503,-6.42878 7.08203,-6.92578c0.37,-0.371 0.19698,-0.81836 -0.16602,-0.81836c-0.125,0 -0.27469,0.05269 -0.42969,0.17969c-0.608,0.497 -9.08436,6.169 -9.81836,6.625c-0.486,0.302 -1.23853,0.51953 -2.01953,0.51953c-0.333,0 -0.67014,-0.03991 -0.99414,-0.12891c-1.128,-0.311 -3.03692,-0.89016 -3.79492,-1.16016c-0.729,-0.26 -0.99414,-0.50908 -0.99414,-0.95508c0,-0.634 0.89489,-1.07166 1.83789,-1.47266c0.996,-0.423 18.23012,-7.74156 19.57812,-8.22656c0.624,-0.226 1.19483,-0.36328 1.67383,-0.36328z"></path></g></g>
            </svg>
      </a>
      <a href="https://www.facebook.com/groups/3679582335481714/" target="_blank">
      <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="20" height="20" viewBox="0,0,256,256">
         <g fill="#fffcfc" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><g transform="scale(10.66667,10.66667)"><path d="M9.54688,0.98047c-4.161,0 -7.54687,3.38392 -7.54687,7.54492v3.49805c0,2.226 0.326,5.2628 3,6.7168v2.48242l2.06641,1.0332l3.48633,-2.2793l3.77539,-0.03125c4.087,0 7.67188,-3.70188 7.67188,-7.92187v-3.49805c0,-4.161 -3.38587,-7.54492 -7.54687,-7.54492zM9.54688,2.98047h4.90625c3.058,0 5.54688,2.48692 5.54688,5.54492v3.49609c0,3.154 -2.64969,5.92188 -5.67969,5.92188l-4.37305,0.03906l-2.94727,1.92773v-2.48242l-0.63086,-0.25195c-1.661,-0.662 -2.36914,-2.20234 -2.36914,-5.15234v-3.49805c0,-3.058 2.48888,-5.54492 5.54688,-5.54492zM13,3.98047v1c2.947,0 5,2.635 5,5h1c0,-2.838 -2.464,-6 -6,-6zM8.00195,4.99023c-0.23825,-0.03587 -0.49027,0.02069 -0.69727,0.17969l-0.58789,0.45313c-0.694,0.533 -0.91544,1.47391 -0.52344,2.25391c0.738,1.467 1.97458,3.72745 3.01758,4.68945c1.282,1.184 3.29623,2.58734 4.99023,3.27734c0.741,0.302 1.58938,0.08942 2.10938,-0.51758c0.185,-0.216 0.35781,-0.43577 0.50781,-0.63477c0.307,-0.408 0.21773,-0.98616 -0.19727,-1.28516l-1.87109,-1.3457c-0.402,-0.289 -0.96363,-0.20936 -1.26562,0.18164l-0.31445,0.34766c-0.208,0.23 -0.52117,0.35106 -0.82617,0.28906c-0.476,-0.096 -1.23056,-0.40684 -2.10156,-1.33984c-0.719,-0.768 -1.12253,-1.5853 -1.26953,-2.1543c-0.088,-0.34 0.03369,-0.69492 0.30469,-0.91992l0.31445,-0.26172c0.367,-0.304 0.43906,-0.83661 0.16406,-1.22461l-1.14062,-1.61133c-0.15,-0.2125 -0.37503,-0.34108 -0.61328,-0.37695zM13,5.98047v1c1.514,0 3,1.486 3,3h1c0,-2.056 -1.944,-4 -4,-4zM13,7.98047v1c0.645,0 1,0.355 1,1h1c0,-1.197 -0.804,-2 -2,-2z"></path></g></g>
         </svg>
      </a>
   </div>
   <div class="footer__develop">
      <a href="https://ua.linkedin.com/in/iryna-nyshta-4553a4301" target="_blank">
         <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="20" height="20" viewBox="0,0,256,256">
            <g fill="#fffcfc" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><g transform="scale(8.53333,8.53333)"><path d="M24,4h-18c-1.105,0 -2,0.895 -2,2v18c0,1.105 0.895,2 2,2h18c1.105,0 2,-0.895 2,-2v-18c0,-1.105 -0.895,-2 -2,-2zM10.954,22h-2.95v-9.492h2.95zM9.449,11.151c-0.951,0 -1.72,-0.771 -1.72,-1.72c0,-0.949 0.77,-1.719 1.72,-1.719c0.948,0 1.719,0.771 1.719,1.719c0,0.949 -0.771,1.72 -1.719,1.72zM22.004,22h-2.948v-4.616c0,-1.101 -0.02,-2.517 -1.533,-2.517c-1.535,0 -1.771,1.199 -1.771,2.437v4.696h-2.948v-9.492h2.83v1.297h0.04c0.394,-0.746 1.356,-1.533 2.791,-1.533c2.987,0 3.539,1.966 3.539,4.522z"></path></g></g>
            </svg>
      </a>
      Developed by Iryna Nyshta
   </div>
   </div>
  </footer>
  <script src="script.js"></script>
</body>
</html>
