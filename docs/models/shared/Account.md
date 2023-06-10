# Account


## Fields

| Field                                                      | Type                                                       | Required                                                   | Description                                                |
| ---------------------------------------------------------- | ---------------------------------------------------------- | ---------------------------------------------------------- | ---------------------------------------------------------- |
| `accountUsers`                                             | array<*string*>                                            | :heavy_check_mark:                                         | List of the users in the account                           |
| `createdAt`                                                | *string*                                                   | :heavy_check_mark:                                         | Timestamp of the account creation date                     |
| `id`                                                       | *float*                                                    | :heavy_check_mark:                                         | The id of the account                                      |
| `name`                                                     | *string*                                                   | :heavy_check_mark:                                         | The name of the account                                    |
| `ownerId`                                                  | *float*                                                    | :heavy_check_mark:                                         | The id of the account owner                                |
| `personal`                                                 | *bool*                                                     | :heavy_check_mark:                                         | If the account is personal or belonging to another account |
| `updatedAt`                                                | *string*                                                   | :heavy_check_mark:                                         | Timestamp of the last account update date                  |