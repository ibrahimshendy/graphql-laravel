## Testing Graphql with laravel by using `lighthous package`

## Installation steps

##### 1) Running migration
```
   $ php artisan migrate
```

##### 2) Running seeds
```
   $ php artisan seed --class=DatabaseSeeder
```

##### 2) Open your local application to `{base_url}/graphiql`
- Example of fetching first user.
```
{
  user (id:1) {
    id
    name
    email
    posts {
      id
      title
      comments {
        id,
        comment
      }
    }
  }
}
```