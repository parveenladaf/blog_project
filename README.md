# Nodejs Assignment

This assignment is tested and work on laraven version v7.0.

## Project Setup

```sh
composer install
```

## Start Command

```sh
php artisan serve
```


## API Docs


- Get all blogs
- User sign in
- User sign up
- Create post
- Edit post
- Delete post



   **1. Get All Posts** 

   > Method: GET

   > URL: ```{{base_url}}```


   > Success Response(200):
    ```
        Get all post for guest user without edit and delete options
   ```

   **2. Login Author User**

   > Method: POST

   > URL: ```{{base_url}}/api/login```

   > Request Body: 

   ```
     {
        "email_id":"parveen@gmail.com",
        "password":"sdcsdcscsxaxs"
      } 
   ```

   > Success Response(200):
   ```
          After login page redirect page shows all posts for that user with edit and delete option
   ```


   **3. Sign Up user**

   > Method: POST

   > URL:  ```{{base_url}}/user/:id```

   > Request Body: 

   ```
     {
        "first_name":"psbsh",
        "last_name":"sdsdd",
        "email_id":"parveen@gmail.com",
        "password":"sdcsdcscsxaxs"
      } 
   ```

   > Success Response(200):

   ```
        After sign up page will redirect to create post
   ```

   **4. Create Post**

   > Method: POST

   > URL:  ```{{base_url}}/api/signup/create```

   > Request Body: 

   ```
     {
        "title":"psbsh",
        "post":"sdsdd",
      } 
   ```

   > Success Response(200):

   ```
          {
              Post created successfully
          }
   ```

   **5. Delete Post**

   > Method: DELETE

   > URL:  ```{{base_url}}/api/post/:id```

   > Success Response(200):

   ```
          {
             Post delete successfully
          }
   ```

   **6. Post Update**

   > Method: PUT

   > URL:  ```{{base_url}}/api/post/:id```

   > Request Body: 

   ```
     {
        "id":2,
        "title":"psbsh",
        "post":"sdsdd",
      }  
   ```

   > Success Response(200):

   ```
        Post updated successfully
   ```

