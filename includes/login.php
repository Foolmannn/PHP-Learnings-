 <!-- <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "shopsathi";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("connection failed." . $conn->connect_error);
    }
    // echo("connected succesfully");


    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $username = $_POST["username"];
        $password = $_POST["password"];
        // $userRole = $_POST["userRole"];
        
        $sql ="SELECT * FROM users WHERE name= '$username'";
        $result = $conn->query($sql);
        if($result->num_rows > 0){
            $user = $result->fetch_assoc();
            if($password== $user["password"]){

                echo "<p style='color:green;'>" .$username .", Your user id is " . $user["userid"] ." and you are a " .$user["role"]." </p>";
            }
            else{
                echo "<p style='color:red;' > Enter the valid username and password </p>";
            }
        }
    }

    $conn->close();
    ?>   -->

    <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shopsathi";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST["username"];
    $password = $_POST["password"];

    // Prepared statement
    $stmt = $conn->prepare("SELECT * FROM users WHERE name = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();

    $result = $stmt->get_result();

    if ($result->num_rows > 0) {

        $user = $result->fetch_assoc();

        if ($password == $user["password"]) {

            // Start session
            session_start();
            $_SESSION["userid"] = $user["userid"];
            $_SESSION["username"] = $user["name"];
            $_SESSION["role"] = $user["role"];

            // ✅ Redirect based on role
            if ($user["role"] == "seller") {
                header("Location: seller_dashboard.php");
                exit();
            } 
            elseif ($user["role"] == "customer") {
                header("Location: shopping_dashboard.php");
                exit();
            } 
            else {
                echo "Invalid role.";
            }

        } else {
            echo "<p style='color:red;'>Invalid username or password</p>";
        }

    } else {
        echo "<p style='color:red;'>User not found</p>";
    }

    $stmt->close();
}

$conn->close();
?>
<!-- 
Good question Suman 👌
Understanding these two properly will level up your PHP skills 🔥

I’ll explain clearly and simply.

---

# ✅ 1️⃣ What is `prepare()` and how it works

### 🔴 Problem Without `prepare()`

Your old query:

```php
$sql ="SELECT * FROM users WHERE name= '$username'";
```

If user enters:

```
' OR 1=1 --
```

Your query becomes:

```sql
SELECT * FROM users WHERE name= '' OR 1=1 --
```

⚠️ This is called **SQL Injection** — attacker can login without password.

---

## ✅ What `prepare()` Does

```php
$stmt = $conn->prepare("SELECT * FROM users WHERE name = ?");
```

Here:

* `?` = placeholder
* Database prepares query structure first
* User input is added separately later

---

## 🔹 Step-by-Step Flow

### Step 1: Prepare the query

```php
$stmt = $conn->prepare("SELECT * FROM users WHERE name = ?");
```

✔ Query structure is locked
✔ No user input yet

---

### Step 2: Bind the value

```php
$stmt->bind_param("s", $username);
```

* `"s"` means string
* `$username` is safely attached

Even if user types:

```
' OR 1=1 --
```

Database treats it as **normal text**, not SQL code.

---

### Step 3: Execute

```php
$stmt->execute();
```

Now database runs the safe query.

---

## 🔐 Why It’s Secure

Because:

* Query structure and data are separated
* User input cannot change SQL logic
* Prevents SQL Injection

---

# ✅ 2️⃣ What is `header()` and how it works

Now let’s understand this:

```php
header("Location: seller_dashboard.php");
exit();
```

---

## 🔹 What `header()` Does

It sends a **HTTP response header** to the browser.

Basically tells browser:

> "Hey browser, go to this page instead."

---

## 🔹 What Happens Internally

When user logs in:

1. PHP checks role
2. If role = seller
3. PHP sends:

```
Location: seller_dashboard.php
```

4. Browser immediately loads that page

---

## 🔴 Important Rule

⚠️ `header()` must be used BEFORE any echo or HTML output.

❌ This will cause error:

```php
echo "Welcome";
header("Location: page.php");
```

Error:

```
Headers already sent
```

Because once output starts, headers cannot be changed.

---

## 🔹 Why We Use `exit();`

```php
header("Location: seller_dashboard.php");
exit();
```

`exit()` stops the script immediately.

Without it:

* PHP might continue executing remaining code
* Can cause security issues

---

# 🧠 Real Life Analogy

### 🔹 `prepare()` = Locking the kitchen

You decide recipe first.
Customers cannot change the recipe.
They can only give ingredients.

---

### 🔹 `header()` = Traffic police redirect

You reach a road.
Police says:

> "This road closed, go that side."

Browser follows direction.

---

# 🚀 In Your ShopSathi Project

* `prepare()` → protects your login system
* `header()` → sends seller to seller dashboard
* `header()` → sends shopper to shopping dashboard

---

If you want next level explanation, I can show:

* What happens in browser network tab
* How session + header work together
* Full authentication flow diagram

Tell me what you want to understand deeper 😄 -->
