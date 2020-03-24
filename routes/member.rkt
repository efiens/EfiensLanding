#lang racket

(require csv-reading)
(require pretty-format)

(define (csvfile->list filename)
  (call-with-input-file filename csv->list))

(define avatar (map string-split (file->lines "avatar.txt")))

; (pretty-print avatar)

(define default-img "")

(define (find-image nickname)
  (let ([img (findf (lambda (avatar-link) (equal? nickname (first avatar-link))) avatar)])
    (if img
      (cond [(string-contains? (second img) "null.png") default-img]
            [else (second img)])
      default-img)))

(let* ([file-data (csvfile->list "member.csv")]
       [header (first file-data)]
       [members (rest file-data)])
  ; (pretty-print header)
  ; ("Timestamp"
  ; "Họ và tên"
  ; "Nickname"
  ; "MSSV"
  ; "Khoá"
  ; "Ngày sinh"
  ; "Email SV"
  ; "Email thường dùng (ngoài SV)"
  ; "SĐT"
  ; "Số CMND"
  ; "Ngày cấp"
  ; "Nơi cấp"
  ; "Số Hộ chiếu"
  ; "Ngày hết hạn hộ chiếu"
  ; "Số TK OCB"
  ; "Chi nhánh TK OCB"
  ; "Bio"
  ; "Size áo thun"
  ; "Lớp sinh hoạt"
  ; "Link Facebook")
  (define (get-name lst)
    (list-ref lst (index-of header "Họ và tên")))
  (define (get-nickname lst)
    (list-ref lst (index-of header "Nickname")))
  (define (get-shoolyear lst)
    (list-ref lst (index-of header "Khoá")))
  (define (get-email-student lst)
    (list-ref lst (index-of header "Email SV")))
  (define (get-email-personal lst)
    (list-ref lst (index-of header "Email thường dùng (ngoài SV)")))
  (define (get-bio lst)
    (list-ref lst (index-of header "Bio")))

  (define (print-member m)
    (let ([name (get-name m)]
          [nickname (get-nickname m)]
          [schoolyear (get-shoolyear m)]
          [email-student (get-email-student m)]
          [email-personal (get-email-personal m)]
          [bio (get-bio m)])
      ; TODO: update here
      (pretty-printf #<<member-info
    (object) array(
        "name" => "~a",
        "title" => "",
        "description" => "~a",
        "image" => "~a",
        "mail" => "~a",
    ),~%
member-info
          nickname
          bio
          (find-image nickname)
          email-personal
      )))

  (displayln "\"members\" => [")
  (map print-member members)
  (displayln "]"))
