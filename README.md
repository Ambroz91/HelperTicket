# Ticket Helper Project

## Project assumptions

1. User can see the posted tickets without loging in
2. To post a ticket the User must log in to account
3. User can create an account
4. Admins can reply to a ticket
5. Admins can close a ticket when the problem has been solved
6. When there is an answer or status change on a ticket the user will get an email notification
7. User can give the ticket a title and description
8. User can upload a document (pdf) or image of the problem

## Database

1. Ticket
    - ticketId
    - title {required}
    - description {required}
    - attachmentId {nullable}
    - userId
    - replyId

### User
1. Users
    - userId
    - nick {required}
    - email {required}
    - password {required}
    - role (User, Admin)
    - isActive

### Replies 
1. Replies
   - replyId
   - replyText
   - attachmentId {nullable}

### Ticket_Replies_MM
1. Tickets_Replies_MM
   - ticketId
   - replyId

### Attachments
1. Attachments
   - attachmentId
   - attachment_localization
