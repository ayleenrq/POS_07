<!DOCTYPE HTML>
<html lang="en">
    <head>
      @include('component.head')  
      <title>Point of Sales (POS)</title>
    </head>
    <body>
        @include('component.header')

        <main>
            <!-- Home Section -->
            <section class="pertama" id="home">
              <h1>Welcome to POS</h1>
              <p><i>Your daily needs, just a click away!</i></p>
            </section>

            <!-- Products Section -->
            <section class="projects" id="products">
              <h2>Our Categories</h2>
              <div class="project-tile">
                <div class="kotak"><a href="{{ url('/category/food-beverage') }}">Food & Beverage</a></div>
                <div class="kotak"><a href="{{ url('/category/beauty-health') }}">Beauty & Health</a></div>
                <div class="kotak"><a href="{{ url('/category/home-care') }}">Home Care</a></div>
                <div class="kotak"><a href="{{ url('/category/baby-kid') }}">Baby & Kid</a></div>
              </div>
            </section>

            <!-- Sales Section -->
            <section class="pertama" id="sales">
              <h2>Sales & Transactions</h2>
              <p>Manage your sales with our efficient POS system.</p>
              <a href="{{ url('/sales') }}" class="btn">Go to Sales</a>
            </section>
          
            <!-- User Profile Section -->
            <section class="pertama" id="user-profile">
              <h2>User Profile</h2>
              <p>View and update your profile information.</p>
              <a href="{{ url('/user/1/name/Ayleen') }}" class="btn">View Profile</a>
            </section>
        </main>
        
        <footer>
            <div class="note right">© 2025 POS System - Created by Ayleen</div>
        </footer>
    </body>
</html>
