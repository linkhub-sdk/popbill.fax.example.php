popbill.fax.example.php
==============================

팝빌 팩스 SDK Example for PHP 5
####Requirements
+ php 5.3+
+ curl
+ openssl 1.0.1g+ (don't forget about heartbleed.)

####예제 목록
+ common.php  - 공통부분
+ JoinMember.php  - 연동회원 가입
+ GetBalance.php  - 연동회원 잔여포인트 확인
+ GetPartnerBalance.php - 파트너 잔여 통합포인트 확인
+ GetPopbillURL.php - 팝빌 기본 URL 확인
+ GetUnitCost.php	- 발송 단가 확인
+ SendFAX.php	- 팩스 전송
+ GetFaxDetail.php	- 전송 내역/상태 확인
+ CancelReserve.php	- 예약전송건 취소