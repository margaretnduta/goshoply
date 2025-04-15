<?php
include 'dbconnection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Electronics - Go Shoply</title>
  <link rel="stylesheet" href="electronic.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Lobster&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Lobster&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
    rel="stylesheet">
    <link rel="icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTuLNguRJlcleGuri-h9hQ5ZsPuygm2jKJ6Lg&s">
  <script src="electronic.js" defer></script>
</head>
<body>
   <header>
    <h1>Go-shoply mart</h1>
    <nav>
      <ul>
        <li><a id="navbar" href="about.php">About</a></li>
        <li><a id="navbar" href="contact.php">Contact</a></li>
        <li><a href="login.html"><img src="upload/log in.jpeg" id="icon"></a></li>
        <li><a href="cart.php"><img src="upload/shopping basket.jpeg" id="icon"></a></li>
        <li><a id="navbar" href="categories.php">Products</a></li>
      </ul>
    </nav>
  </header>
  <main>
    <section id="featured" class="featured-products">
        <h2>ELECTRONICS</h2>
        <div class="product-grid">
          <div class="product-item">
            <img src="https://th.bing.com/th/id/R.8876d643503a0fb5559e7083282574be?rik=fEs0p2Is0jCHRg&pid=ImgRaw&r=0" alt="Product 1">
            <h3>Iphone 11</h3>
            <p>Ksh 40000</p>
            <button class="btn add-to-cart" data-name="iPhone 11" data-price="40000">Add to Cart</button>
          </div>
          <div class="product-item">
            <img src="https://th.bing.com/th/id/OIP.agtlwlb8wl13JnygSFiIfgHaHa?w=202&h=202&c=7&r=0&o=5&pid=1.7" alt="Product 2">
            <h3>Wireless Headsets</h3>
            <p>Ksh 3000</p>
            <button class="btn add-to-cart" data-name="Wireless Headset" data-price="3000">Add to Cart</button>
          </div>
          <div class="product-item">
            <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wBDAAsJCQcJCQcJCQkJCwkJCQkJCQsJCwsMCwsLDA0QDBEODQ4MEhkSJRodJR0ZHxwpKRYlNzU2GioyPi0pMBk7IRP/2wBDAQcICAsJCxULCxUsHRkdLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCz/wAARCADcALADASIAAhEBAxEB/8QAGwABAAMBAQEBAAAAAAAAAAAAAAQFBgIDAQf/xABEEAACAgEBBQUFBQYDBQkAAAABAgADBBEFEiExQRNRYXGBIjKRobEUI3KCwQZCUmLR4RUzkhYkU6PwQ0RUY3OTosLx/8QAFQEBAQAAAAAAAAAAAAAAAAAAAAH/xAAXEQEBAQEAAAAAAAAAAAAAAAAAASER/9oADAMBAAIRAxEAPwD9biIgIiICIiAiIgIiICI4Tkug6/CB1E47RO8/AzreUjUHhA+xODYOg1nDG1vdfd8lB+sD2iQbbtpY+r9gmXUOLDH+7yFA6rW5KN5bwnpi52LmVm3HsDqGKOOKvW45pYje0GHcRAlROQ6nw851AREQEREBERAREQEREBOLLFrXU8zwUd5ncxW1v2gFG2sbFKsa3tSgOG0WveO6vs9dTz8/CBqe0LnVj5DoJ0GkFLddPSe6vAkyNloz0WbhIsrBtrI57y8dPXlPXfEbw1HdrxgVdGXZcAVc8gWPnx0HjJ9V9q6anfHUEAN6aTKC7add1VGAuOy1bYsp2j259pcNSeNevXl48vGaJGgW6MrqGU6gyq2lhXV2Hamz1Azql+/rHuZ1K867QP3gPdPP9JGPaUcA+650bwbofX/rnLCBV42ZVk0UZNJPZ3LvKD7ykHRkbxB4H+8mLaSp3QCwGu5rpvAdFJ6ykCfYtpbRw14U5NY2ljKOStru2qAPIn0ElV3EEEHiDwgW9diWoliHVXAIP9R3986kHGcLlZFQ9y+tc2sfwszGu0D10b8xk6AiIgIiICIiAiIgJ+V7YxbbdpUMNe0fKxSp8e0XjP1SZLalNONl6vWO0BZ8ZuPuPr6cOIgSUsB04+UkpZ4yoqt4DjJiWwLAWT4bJE7Wcm8LxJ4L7R/CvEwKT7z7btC6ltLPteRqP3bFFjHdYfQ9Pre0WCyutxqA6hgDzGo5GZvFuXRrGb2ndnIHElnYtoBzlwjZNGDY1NItya8e16aWbdWy7QutZYdNeH/WsC1B9lvIkeY4iWdNgZFPgJQ4t19mLVbkVdlc1Ra2vQjcbQ8NCSR5E8PSWND7taDuVfpJL3S4i7W4Z37P36c78nFfvK2op0+RkaqzlOtrXA27CXX/AL9dcfw1VDX6yFTZroe/jKLzGbey9n6cxjZ4P4d+jSWsrNm0uWOS/LsRRT4gubHb1Og/LLOAiIgIiICIiAiIgJD2hgU59HZOd11O9TYBqUb+h6j+nCZEDDZFGXs+zs8lN0E6JYNTVZ+Fv05zpLx3zauldisliK6MNGVwGUjxB4Sst2Dsiw6rU9R/8i10HoupX5QKE3gDnIWdk60mhW0bJYUEjXVazxduHhw9Zp/9ndmdXyv/AHR+i6yq2psI4znIxgz0cCQSWekjv6lfH/8AYFPstmtptJxXxnqvuoVHA3itbaB1OgGjDiP101NxU4XRST7R9nUk/E98iV2VgDUhfM/Q8p7LcgJKAszHjpqF18SeECYzAhaweLnj4KOJP6esldoFHOVyPuksxBY89OQA5ADunFuRkMexxF38ph7JIJqxwf8AtbTy4fujmfKB5ZNpydoXEHWrAx2xQehyLvas08hoDJWy8C/LZXIK4yn2rCNN/T92vXn5yTsvZVICVtq9NJLWl+d9zHeJfz5n0E0QAAAAAAGgA4ADuAgFVVVVUaKoCqByAHDSfYiAiIgIiICIiAiIgIiICIiAiIgQL9k7OyCXNRrcnUtQxQk95A9n5Sg2zjUbM+yCq6wm8269sVIATd5FVHfNdMl+1J3srDT+HHZv9bkfpAqe1yG5PoD1X9DLfZle5jux4l7Gb4ACZ9FKnVSV/CdPlyl/h9u4w8ffbR3rVt3RTox1OpUawNPjViqitdOJG834m4me0RAREQEREBETksoBOo0A1J14AecDqJDfOqB3U1Y944D06zyy2ycjdxMd2pe0HtbU03q6xoHKnv6Dx8FMCQ2dhC9sZbe0yFAL1UK1r1g8u07MEL6kSQGGmp1HnPDEw8XCoTHxq1rrUkkD3mY83djxLHqTOrXC6KBvOdSFHcOpPdA9QynkR8Z8eyusauwUHlqeflKXOyHpRmI3TodCDw185E2XlZObhVX5FhsdnvVSeYrS1lUawL5s3GXq7fhU/rpORn4hPEuviynT5ayBoDPhrB6QLlLK7BvI6sO9SDOpQaW0sHqYqw6jr4ES0w8tclWUjdtr0316EHky+ECXMft7fu2p2aDVlppqUagakgvoNfObCZDJ3L9uZe/ulFfdYMAQQqJVukEEHU6Dp5jnArBU62Gt1KuGCsp5g68jNFsusNmVnpUjv66bg+spatbMp3PWx3PAjqe8k/OaTY1fDJt05slQ/KN4/UQLaIiAiIgIiIFXlXNk5q4COVx6K1yNoMpILBv8vH3ugPNvAadZGzM3f1VeFY91e/TqZHxnLJtHI/fyst3J67g4KPTjIGVZprAlVZAFj2sfYxqnyGB5EroqKfNist9lsTjJkPxsygLCT0r47g+HtebGZN3b/D9qMpO8xqrGncqPZ9d2ayvSta6l92tFrXwCAKIFjvAIXPIAk+Q4yOAdCze+/tN4dy+kWNrVWn8dtSHyLan6T6xgZvbuTkpYMVcR2xnwMnJfNDexVfU4C0ldOZHEcfpw8v2ectsrF1HHfyR/znMlbd3mpepeAKb1p6ka8EH1Mr/2fcfYjX/w7SB+YBoGgSemgnhWZ7g8IHDgaSDhWNVtu1NTuW1VqB0GqdPWT2PCQGQ/4lg3KOGq1t4EOCIGlmOx23s/a2VxIR8lhulQ2jO51BOh4AdGHryOwZgoZjyUFj5Aaz85rZid4EgtrqQdCd7nAn4a8XbuUD1M1mzE3MOk9bC1p/MeHy0mXxVPZHT3nYgfQTZVoK666xyRFQflGkDqIiAiIgIiIGTxHIpvqb3qr7a2HcVbQyFmHgdJO2jRZg7Tts3f912n94jAeymWqnfrJ72A3l79D3SuyuIPlAipYBgZ5JHCze/5RP8A9TNWLQWPHqT85j2rZsbaFQ13noLrp1NerEfAtLfZ2YcnCwridWalFs8LE9hx8QYGiawbuOe7Iq19dV/WeOXtPExMvZGDat7X7UsvrxzUgZE7GvtGa066geh8dOc8kc202Ip9sgFNf41IZfmBJiWrbWlq8nXeGvMa8wfLkYFbtNd4WA/vqCviQNCJmtj39hmZmKx4sosQHqFbQ/Wa/IrW1XVwGUgDdYAgEa8R1mHt9jOfMpxr6Vxc7Kw2Fi7vbJUeza1B/CeOnlA11dokgWDTnKerIBCkEEEAgjlJAyAOZHHhAsGsGkYVTZGSr6fdUEMx6M/NVH1P95xj4eXlbpYNVTwJdxo7D+RTx9T85dVVVUVrXWu6i8u8nqSe+B9tTtarq9SvaVvXvDTUbwK6jWYbaOA+yHx1utFtd/adm9aPqBXu69ovHTmNOJm8lHtMC3aOOh0K1Y28Qehdz/QQI2y8S24YVyp/u4K2GwkANune9kczxmlnnQgrppQAALWo0HlPSAiIgIiICIiB520031tVcivW2m8rDUHQ6g+nMSgz9i3gs+MO0r57mv3i+A15zRxAwPZsjgjgVPUdR0IkfF0wMqzGPs4uW5txWPKu46BqifHp5fzTU7Xw1V1ykHCw7toHIPpwb16/3lNfjV31tW6hlb3lPI/Dr3QJdNprYSalvZl2ALU2EtYq8Wrc82UDiQeo9espqUyagEeztUHBTZ/mgdzMOB89NfOWuJg5l9a212VKhLDRy+8Cp04gDT5wPcWUlSVtUhmLcXGoJ8Dxkf7GNoXCvQ9mv+a4/dU9x7z0/tJ6bLJIN9+93ipAp/1NqZY111VIErUKo6Dv7yeesCIdk7JJB+yVcFVQBvAaKABqoOnykirFxKdDVRTWR1RFB+Oms9ogIiICUb/e7TzSOIVqqh6IoPzJl5KTB0syb7OlmVa48t8kQLuIiAiIgIiICIiAiIgeOTULqLqtOLId38Q4j5zKpk45I3mK9CGRv0BmwmL2jT9nzsqscF7TtE05br+2APLXT0gelt/MVJ+dx9F/r8Jb7AdjTmVsxZhcLNWOp0dQP0lOAGVW7wDLTY+tWVkVMCC9IJHijD+sC9iIgIiICIiBzY4rrssPJEdz+UEyp2Qns1k891mPmRpJ+e+5hZh76XT1f2P1kfZi6IfBFHxMCxiIgIiICIiAiIgIiICZ79oadHxcgD3lal+HVTvL9T8JoZX7Xp7bAyNBq1W7ev5Ofy1gUGGxCKQSDW/MHQjrwMtKvuto4zcd20AaksxIZCvFmAJ4iU+GfbdD+8uo9Jau2i4d2uhRwW5Akggk6ak9IF9ERAREQERECDtVtMOxf+JZSg/1hv0nWAulbHxUfATy2sR2WKn8WSp9FRpJxBpSPFm+WggSIiICIiAiIgIiICIiAnxlV1ZWGqsCrDvBGhn2IGJVWxso1tzqtapvQlZamxux7HQaFi2vWRtt1dlnFxppfWlo/EvsN9AfWetZNiVMoJLgABQSSdOQAgaDHffox36tUhPnpoZ6yPhpbXj1JaN1xvcNQdAWJAOkkQEREBERAq9qcbdnr/Ncx9N0SfjjSmrxBPxJldtA65mKv8NLN/qbT9JZ1DSqofyL9IHcREBERAREQEREBERAREQPO2jHu0F1NVgHLtEV9PLeEo8XDqxtoXsS7Gi9jQHcsKq3JYBByA0Ok0Eq8pdzNRul1Q18WQ7v9IFpE5Q7yIe9Rr5zqAiIgIiIFRmnXPH8mOg+LOZbKNFQdyqPlKe/jtHI8FpX/wCIP6y5gIiICIiAiIgIiICIiAiIgJA2kNBi2/wXFD5OP7SfIu0ADiW69DWw8CHWB6Y7a1jwJHx4z2kbE9xvJD8jJMBERAREQKdva2jlf+pUvwVRLiU9Y1z8on/xA+olxAREQEREBERA/9k=" alt="Product 3">
            <h3>Apple Ear Phones</h3>
            <p>Ksh 2500</p>
            <button class="btn add-to-cart" data-name="Ear Phones" data-price="2500">Add to Cart</button>
          </div>
        </div>
      </section>
     

      <section id="featured" class="featured-products">
        
        <div class="product-grid">
          <div class="product-item">
            <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wBDAAsJCQcJCQcJCQkJCwkJCQkJCQsJCwsMCwsLDA0QDBEODQ4MEhkSJRodJR0ZHxwpKRYlNzU2GioyPi0pMBk7IRP/2wBDAQcICAsJCxULCxUsHRkdLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCz/wAARCAC7ARgDASIAAhEBAxEB/8QAGwABAAMBAQEBAAAAAAAAAAAAAAEDBAIFBgf/xAA8EAACAQICBgYHBwUAAwAAAAAAAQIDEQQhEjFBUXGBBRMiMmGRBhRTkqGx0UJSYsHS4fAHFSNUcjNDov/EABYBAQEBAAAAAAAAAAAAAAAAAAABAv/EABkRAQEBAAMAAAAAAAAAAAAAAAABESExQf/aAAwDAQACEQMRAD8A/WwAAAAAAAAAAAAAA4dSGxtv8OYHYOOtjul5EqcHqee55MDoAAAAAAAAA5c4LW89yzfwA6BX1sfuz8iVUg3a7T/FkB2AAAAAAAAAAAAAAAAAAAAAAAAAAAAApnLSbitSydtrOlFK3yOKbu29bu3be92Z+O430/8ASmeIxChjqOD0atSHqypYdToaMnHQmqyc7rbc0j9laRDjfx4o/C6v9QvTahZx6WpzTeqeFwUl5qFz9F9A/SjpD0lwGPlj6VNYnA4inRlWowcKdeNSDmuzdpSVnpWe1arjR9ZKdSCUVreptXtbM408Qvtp+DijuTu48X8gwOqdZTejJaM92x8C4x3Sq4fe5peaZsMqpqVlFuEVpT27lxZXp4jXpJeCirHCadWv4VZLyLUUI1JzTi/suzaVtI7UUvDgcRdnLxf5HyXp56UdIejWB6PeApUnicfXq041q8HOnQhSipO0bpaTurXexlR9jZENJrfxPwul/UH02rXc+lqcEn3YYXBx+Lhf4m/B/wBQPSmGIwqljaWN069Gn6r1WHc67nNQ0IKilO7vlYaP2WDaai9T1eDLSibs1lZ3i+DL/wByVQAEAAAAAAAAAAAAAAAAAAAAAAAAGRS0JyTtrfzsU1+jOhMVOVXFdG9H16sraVTEYShUnLZnKcWxjJdTUUnfQqJtSWajNb/BlccXF2Tdn/NppGep6Meh9Xv9AdDNvW44KhF+cIpmzB4Lo3o2gsN0fhcPhcOpOfV4emoRc5a5O2tve93gc+sR3lc8TBbfiBqdRKUb21v5EyqRW1HnSlialOpiIQk6dHPJNubfZtBLPLWzFLHVpvRp0q0pbFCE2/JID1etTxOFjfXVj8meqeD0dgMdUr0sVi06UKUtOlSb7c5WaTmlqSv/ADb7xlXlKqlXxUW1lXqfM0xqR3o83H4DG069XE4ROrCrLTqUk+3GW1x3oxrHV4dmdKtGSys6c078LFHuqonKVmu9+SK8Zgejek6Dw3SGFw+Kw7kqnV4impxU43Skr6ms8/HxMcXiqdOnXqQmqdbtK6acNlpJ77XRdHExtrXmVFNP0Y9EKSWh0B0MranLA4eT85RbNlDozoXCTjVwvRvR+HqxTUamHwtClOKeTtKEUyPWIb/icSxUc0nd/DmwNd9OpGK3o1Hn4KXW1JSXcppXl9+pLdfYl8z0CVQAEAAAAAAAAAAAAAAAAAAAAAAAAFWIpRq02mrtdpZHj1sO6ek46snbY0ew6qvaKbfwM1WDad9azaW5mojHRw9CsoOV452lo7L8TfT6OwcLNwc2vvu68lkZaC0Jyg9UvmWVcWqMtCfW3sneNrW1bWB6CSSSVklqSVrEnmLpCntdfyj+o6jjaMnbrpx/7i18b2Jg9EGZOpZNVHZ6n/GL1faPy/cYNIM96mb6x2Wbb1JeOZRPG0YO3Xyk1r6uN15t2GDc0mmmk09aaumZZ9H4Obb0HF6+w7LyZn/uNPfW8o/qO6WK6+ThDrdTbcrWWzYxgy18PQoqTjd5tR0vmcUcPp6Lnq71rZeBorduoo/ZjkaKUNFR1Xbuk9tijRQpKlTUVlftOy2stKo1dk1ZlplQAAAAAAAAAAAAAAAAAAAAAAAAqqSbaguZaULOU3tuWCuvVjhqMppLS7sE9snvPNwmIl6w1Uk2q3Zbf3tjLOlKnap0k+5FyfGR5eno7bPY9zKj3KkHGV9TTK8VTlVouds6bunta2otw9WOLo05prT7lRZXUkZJ9JYV4eUsHVoYp1JqknTnpU4pPRnKTW7Oy3gZVbIm1yuCky+EALcNXlRnGEnelJ2t91vaj1Dyurdj0s+rvt6v42AwYqvKrJ04tqlF2aX25LazLZIv6t/ErnD8wKnY9HD0pU6UKt7Ofae+1uyv5vPLkpK5th0lhlh4SxtahhnCfVvrJ6MJXlowcW9+QGunC7XizHi8Q3iEqcmo0OxFrbK/af5cjbiK0MJQqVG11j7FJbXN7eWs8PT0rAfQYarHEUVJ20k7St97eX05NNwfI8roypac6bffjdcUenLKUGBeADKgAAAAAAAAAAAAAAAAAAAAAZ76M5re/wBzQUV4O2mr5ZSts3MsHj41OWIrX8LcLKxk6rS2ZrI9atTVSzdlNKyeyS4lUaLjJOzTW8qMMKVSDvBzi98bp/AlUba1Z63lbWespT+6r7yp07tt5t7QMlOn4GqEN6XkSlTh3pRVtl1cl16CyTb4L6gSoJtLzNV1a2y1uRjWKgtUHzaHrf4P/pfQDpw0ZNeLtwOJwViXioPXB8mrhVqDVm2uK+gGSdO9yl0b6lqzXFHotU5d2UXzVwqbTTWvYB5k6VSbvNzlLfJtv4nPUtbN57TlO3dXGxmnSlJt2d3nkBTg4tYijbY3fgevfSqQju/PMx0aaptyWc2rX2RXibaEH33fO9t73sC8AGVAAAAAAAAAAAA5jmAA5jmAA5jmAA5jmAA5manfRjm9bLBFSg1eVO2euD1cjLKWg2pQcX4No9KXdfAzSLEZlVj+PzX0MnSOLhh8K6rdTR66hCo0k9GnKVnLJbMj0SLlHy3976MX/tn5w+pMMesVUm8NinGlCMI2tSb0827uSb3bT6i1P2VP3V9CV1fs6fur6EHzXXYj/cfu0P0k9diP9x+7Q/SfSf4/Zw8kP8fs4eSA+a67Ef7j92h+krnj1hp0p4jFuVGSqQatRT07Jxzik959T/j9nDyQfV+zp+6gPlf730X7afnD6nr9G4yGJw7qRdTQ66tCk2ktKnB2UldcT0rU/ZU+cV9Bf+WQFLqx3z819CVJyaUYOTe9t/AuR3EomnQvZ1bW2QWrmajmOpcEUVL6Ls3rXzM9jSBzHMigHMcwAHMcwAHMcwAHMAAOQ5AAOQ5AAOQ5AAOQ5ADNT7q4v5mkz08ori/mWC6XdfAzSNMu6+BmkWI4Odp0cvWUQSQCCbgg40Iuoqva0lBw7z0bN31aripbfHeYBAVNyTk6A6R3HWcI7jrRRpj3Y8Cir3X/ADaXw7q4FNTuvj+ZmDQByHIigHIcgAHIcgAHIcgAHIAAAAAAAAAAAAM8NXN/M0GeGp+EpL4lgul3XwMzNMu6+BmZYjg5es6OWUcgkjMgAnMjMAASBB1+5BP7gdLYdLWjlbDuJVaYd1cCmp3XxXzLo91cCmfzlFfEkRoABlQAAAAAAAAAAAAAAAAAAAAAKNU6kfHSXBl5TXTSVRfZ73/P7Fg6unFeRTJExqLfk0RJp3NIrOXrOmcsCCCQQCCcyAAJAEHX7kEoDpFkUVosi0ii+9k+SKrXnTXjpPgiHUWe5HdFNp1H9rurdH9yXgXAAyoAAAAAAAAAAAJIAAkAQCQBAJAEAkAY6tGcLypK8dbgtcf+fApVVPbx8D0SupQo1M5wTe9ZPzRdRj00RpLeWzwSa/x1Zxd/tJTX5MqeBxWzEU+dOX6i6I0lvGkh6jjNlel7kvqPUcb7aj7kvqNDSW8aS3j1LG+2o+5P6j1HG+2o+5P6jQ0l/GNJeA9Sx3tqPuzHqWN9tR92f1JoaS3k6SI9Rxnt6XuS+pPqOL/2Ke3VTk/zLonTRDqpfl4sthgUv/JVnN/hShH838TRTo0aecIJPPtPOXm8yaKKVGdS0qqtDWoPXL/rwNYJIqASAIBIAgEgCASQABIAgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAH//Z" alt="Product 1">
            <h3>Ear pods</h3>
            <p>Ksh 3500</p>
            <button class="btn add-to-cart" data-name="Earpods" data-price="3500">Add to Cart</button>
          </div>
          <div class="product-item">
            <img src="https://th.bing.com/th/id/OIP.5qJYUBpSy9UCgtmGVMIUtAHaHa?w=173&h=180&c=7&r=0&o=5&pid=1.7" alt="Product 2">
            <h3> Oraimo Smart Watch series S7</h3>
            <p>Ksh 3600</p>
            <button class="btn add-to-cart" data-name="Smart Watch" data-price="3600">Add to Cart</button>
          </div>
          <div class="product-item">
            <img src="https://th.bing.com/th/id/OIP.N2-Tqelnz4XR4MXf7T3ccQHaGs?w=222&h=200&c=7&r=0&o=5&pid=1.7" alt="Product 3">
            <h3>LG 55' Inch 4K  Tv</h3>
            <p>Ksh 85,000</p>
         <button class="btn add-to-cart" data-name="Lg 55' inch 4K TV" data-price="85000">Add to Cart</button>
              
      </main>
      <footer class="footer">
  <div class="footer-container">
    <script>
    document.querySelectorAll('.add-to-cart').forEach(button => {
      button.addEventListener('click', function() {
        const productName = this.getAttribute('data-name');
        const productPrice = this.getAttribute('data-price');
        
        // You can either pass the product info via query params (GET) or use localStorage/sessionStorage
        const cartData = { name: productName, price: productPrice };

        // Option 1: Send via URL (GET request)
        window.location.href = `cart.html?name=${encodeURIComponent(cartData.name)}&price=Ksh{encodeURIComponent(cartData.price)}`;
      });
    });
  </script>
    <!-- Section for Quick Links -->
    <div class="footer-section">
      <h4>Quick Links</h4>
      <ul>
        <li><a href="home.html">Home</a></li>
        <li><a href="products.html">Products</a></li>
        <li><a href="about.html">About Us</a></li>
        <li><a href="contact.html">Contact Us</a></li>
        <li><a href="terms.html">Terms & Conditions</a></li>
      </ul>
    </div>
    <div class="footer-section">
      <h4>Follow Us</h4>
      <ul class="social-links">
        <li><a href="https://facebook.com" target="_blank"><img id="social-logo" src="upload/facebook logo.jpeg"></a></li>
        <li><a href="https://instagram.com" target="_blank"><img id="social-logo" src="upload/instagram logo.jpeg"></a></li>
        <li><a href="https://twitter.com" target="_blank"><img id="social-logo" src="upload/x logo.jpeg"></a></li>
        <li><a href="https://linkedin.com" target="_blank"><img id="social-logo" src="upload/linkedin logo.jpeg"></a></li>
      </ul>
    </div>
    <div class="footer-section">
      <h4>Contact Us</h4>
      <p>Email: <a href="mailto:support@go-shoplystore.com">go-shoplystore@gmail.com</a></p>
      <p>Phone: 0716052342</p>
      <p>Address: Moi avenue, Nairobi, Kenya</p>
    </div>
  </div>
  <div class="footer-bottom">
    <p>&copy; 2025 Go-shoply Store. All rights reserved.</p>
  </div>
</footer>
</body>
</html>
