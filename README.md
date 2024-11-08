🔑 Pagination is a common feature in web applications. Almost every Laravel application I've ever worked on has had some form of pagination implemented.

But what is pagination and why do we use it? How can we implement pagination in our Laravel applications? And how do we decide which pagination method to use?

# By using pagination you can:

1. Improve the performance of your application - Since you're fetching a smaller subset of data at a time, there's less data for you to fetch from the database, process/transform, and then return.

2. Improve the user experience - It's likely that the user will only ever be interested in a small subset of the data at a time (typically found in the first few pages, especially if filters and search terms are used). By using pagination, you can avoid displaying data that the user is not interested in.

3. Improve page loading times - By only fetching a subset of the data at a time, you can reduce the amount of data that needs to be loaded onto the page, which can improve page loading and JavaScript processing times.

# Pagination can typically be split into two different types:

`1. Offset-based pagination ` - This is the most common type of pagination you'll likely come across in your web apps, especially in user interfaces (UI). It involves fetching a subset of data from the database based on an "offset" and a "limit". For example, you might fetch 10 records starting from the 20th record to fetch the 3rd page of data.

`2. Cursor-based pagination ` - This type of pagination involves fetching a subset of data based on a "cursor". The cursor is typically a unique identifier for a record in the database. For example, you might fetch the next 10 records starting from the record with an ID of 20.

# Laravel provides three different methods for paginating Eloquent queries in your applications:

     1. paginate - Uses offset-based pagination and fetches the total number of records in the dataset.
     2. simplePaginate - Uses offset-based pagination but doesn't fetch the total number of records in the dataset.
     3. cursorPaginate - Uses cursor-based pagination and doesn't fetch the total number of records in the dataset.

* A. Using the paginate Method => The paginate method allows you to fetch a subset of data from the database based on an offset and limit (we'll take a look at these later when we look at the underlying SQL queries).

[![y-BYUrb-KWRiy-QFf7-M-e3r-Hw.png](https://i.postimg.cc/3wrcn0bj/y-BYUrb-KWRiy-QFf7-M-e3r-Hw.png)](https://postimg.cc/9DSbf02z)


* B. Using Simple paginate Method
=> The simplePaginate method is very similar to the paginate method but with one key difference. The simplePaginate method doesn't fetch the total number of records in the dataset. 

=> [![k-BYd8-Gla-R7mj-ZUAJ7wwy7w.png](https://i.postimg.cc/TY41Rnn1/k-BYd8-Gla-R7mj-ZUAJ7wwy7w.png)](https://postimg.cc/yk0sjgQC)


` Here is the full example with source code : https://tinyurl.com/bdcsz99r ` 

` Checkout more: https://laravel-news.com/laravel-pagination ` 

