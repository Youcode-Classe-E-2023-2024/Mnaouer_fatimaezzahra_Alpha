create table notification_alpha
(
    id_notification      bigint auto_increment
        primary key,
    content_notification text      not null,
    date_notification    timestamp not null,
    constraint notification_alpha_id_notification_uindex
        unique (id_notification)
);

create table user_alpha
(
    id_user       bigint auto_increment
        primary key,
    name_user     varchar(255) not null,
    email_user    varchar(255) not null,
    password_user varchar(255) not null,
    constraint user_alpha_id_user_uindex
        unique (id_user)
);
