<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Panel</title>

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>

    <link rel="stylesheet" href="adminStyle.css" />
  </head>
  
  <body>
    <section class="sidebar">
      <ul class="side-menu top">
      <li class="active">
          <a  href="#" class="nav-link">
            <i class="fa fa-user" aria-hidden="true"></i>
            <span class="text">Admin Panel</span>
          </a>
        </li>

        <li >
          <a href="index.php" class="nav-link">
            <i class="fa fa-home" aria-hidden="true"></i>
            <span class="text">Home</span>
          </a>
        </li>
       
        <li>
          <a href="contact_us.php" class="nav-link">
            <i class="fa fa-users" aria-hidden="true"></i>
            <span class="text">Contact Us</span>
          </a>
        </li>
      </ul>
      <ul class="side-menu">
        <li>
          <a href="#" class="logout">
            <i class="fas fa-right-from-bracket"></i>
            <span class="text">Logout</span>
          </a>
        </li>
      </ul>
    </section>

    <section class="content">
      <nav>
        <i class="fas fa-bars menu-btn"></i>
        <a href="#" class="nav-link">Categories</a>
        <form action="#">
          <div class="form-input">
            <input type="search" placeholder="search..." />
            <button class="search-btn">
              <i class="fas fa-search search-icon"></i>
            </button>
          </div>
        </form>

        <input type="checkbox" hidden id="switch-mode" />
        <label for="switch-mode" class="switch-mode"></label>

        <a href="#" class="profile">
          <img src="profile.jpeg" alt="" />
        </a>
      </nav>

      <main>
        <div class="head-title">
          <div class="left">
            <h1>Dashboard</h1>
          </div>
        </div>

        <div class="box-info">
          <li>
            <i class="fas fa-calendar-check"></i>
            <span class="text">
              <h3>1354</h3>
              <p>New Orders</p>
            </span>
          </li>
          <li>
            <i class="fas fa-people-group"></i>
            <span class="text">
              <h3>78242</h3>
              <p>Clients</p>
            </span>
          </li>
          <li>
            <i class="fas fa-dollar-sign"></i>
            <span class="text">
              <h3>650000 &#2547</h3>
              <p>Turnover</p>
            </span>
          </li>
        </div>

        <div class="table-data">
          <div class="order">
            <div class="head">
              <h3>Recent Orders</h3>
              <i class="fas fa-search"></i>
            </div>

            <table>
              <thead>
                <tr>
                  <th>User Name</th>
                  <th>Order Date</th>
                  <th>Status</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <img src="profile.jpeg" alt="" />
                    <p>Saqlain</p>
                  </td>
                  <td>Dec-7, 2023</td>
                  <td><span class="status pending">Pending</span></td>
                </tr>
                <tr>
                  <td>
                    <img src="profile.jpeg" alt="" />
                    <p>Koushik</p>
                  </td>
                  <td>Dec-6, 2023</td>
                  <td><span class="status pending">Pending</span></td>
                </tr>
                <tr>
                  <td>
                    <img src="profile.jpeg" alt="" />
                    <p>Priotee</p>
                  </td>
                  <td>Dec-6, 2023</td>
                  <td><span class="status process">Process</span></td>
                </tr>
                <tr>
                  <td>
                    <img src="profile.jpeg" alt="" />
                    <p>Mim</p>
                  </td>
                  <td>Dec-5, 2023</td>
                  <td><span class="status process">Process</span></td>
                </tr>
                <tr>
                  <td>
                    <img src="profile.jpeg" alt="" />
                    <p>Fahim</p>
                  </td>
                  <td>Dec-4, 2023</td>
                  <td><span class="status complete">Complete</span></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </main>
    </section>

    <script src="app.js"></script>
  </body>
</html>
