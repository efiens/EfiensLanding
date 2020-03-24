#lang racket

(require racket-cord)
(require pretty-format)

(define bot-token "NjYxNTk0MDY0NDE1NjIxMTQw.Xgtw9A.OanORkJi_A1wlcFL9ukPNbaUkj8")

(define myclient (make-client bot-token #:auto-shard #t))

(on-event
  'message-create myclient
  (lambda (client message)
    (cond
      [(string-prefix? (message-content message) "effi get-member-avatar")
      (let* ([msg-id (message-id message)]
             [channel-id (message-channel-id message)]
             [guild-id (guild-channel-guild-id (http:get-channel client channel-id))]
             [members (http:list-guild-members client guild-id #:limit 100)])
        (define (display-member m)
          (let* ([user (member-user m)]
                 [uid (user-id user)]
                 [avatar (user-avatar user)]
                 [nick (user-username user)])
            (pretty-printf "~a https://cdn.discordapp.com/avatars/~a/~a.png?size=1024~n" nick uid avatar)))
        (map display-member members))
      ])))

;; logging stufff

(define dr (make-log-receiver discord-logger 'debug))

(thread
 (thunk
  (let loop ()
    (let ([v (sync dr)])
      (printf "[~a] ~a\n" (vector-ref v 0)
              (vector-ref v 1)))
    (loop))))

(start-client myclient)
