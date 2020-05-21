<?php

use Illuminate\Database\Seeder;

class news extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       	 DB::table('news')->insert([
        	['id'=>1,'title'=>'Lamborghini ra mắt phiên bản mui trần của Huracan EVO RWD',
        	'description'=>'VOV.VN - Sau nửa năm ra mắt Huracan EVO RWD, Lamborghini mới đây đã ra mắt phiên bản mui trần của mẫu xe này.
lamborghini ra mat phien ban mui tran cua huracan evo rwd hinh 1
Sau khoảng 5 tháng kể từ ngày chiếc Lamborghini Huracán EVO RWD ra mắt cho tới nay, thương hiệu siêu xe Italy đã chính thức “trình làng” phiên bản mui trần của mẫu xe này đồng thời là mẫu xe với hệ dẫn động cầu sau thứ 4 trong dòng Huracán.
lamborghini ra mat phien ban mui tran cua huracan evo rwd hinh 2
Chiếc xe được trang bị các chi tiết như phần cản trước hay cản sau giống với phiên bản EVO RWD coupe được ra mắt hồi đầu năm.
lamborghini ra mat phien ban mui tran cua huracan evo rwd hinh 3
Thay đổi đáng chú ý nhất trên mẫu xe này đó chính là phần mui xe có thể đóng mở bằng điện, đem lại trải nghiệm tuyệt vời cho một chiếc siêu xe dẫn động cầu sau cũng như tiếp nối những thành công của kẻ tiền nhiệm LP580-2 Spyder.

lamborghini ra mat phien ban mui tran cua huracan evo rwd hinh 4
Về thiết kế, dòng Huracán EVO RWD sở hữu nhiều chi tiết ngoại hình được nâng cấp giúp chiếc xe trở nên khác biệt với phiên bản trước cũng như Huracán EVO thông thường.
lamborghini ra mat phien ban mui tran cua huracan evo rwd hinh 5
Cản trước được nâng cấp với phần thanh ngang được nâng cao hơn, hai hốc gió bên được thiết kế chéo liền mạch với capo phía trên, đem lại một vẻ đẹp hoàn toàn khác so với Huracán EVO AWD, đồng thời không làm mất đi vẻ hầm hố vốn có của những chiếc Lamborghini
lamborghini ra mat phien ban mui tran cua huracan evo rwd hinh 6
Ở phần đuôi xe, chỉ có đúng phần khuếch tán được làm mới so với phiên bản Huracán EVO hai cầu. Những chi tiết khác như cánh gió tích hợp, lưới thoát nhiệt, vị trí đặt ống xả đều được giữ nguyên.

lamborghini ra mat phien ban mui tran cua huracan evo rwd hinh 7
Trong khoang nội thất, chiếc xe được trang bị một màn hình cảm ứng HMI 8,4 inch trên phần bảng điều khiển trung tâm giúp điều khiển các chức năng của xe hơi cũng như cung cấp kết nối toàn diện cho các cuộc gọi điện thoại, truy cập internet và Apple CarPlay.
lamborghini ra mat phien ban mui tran cua huracan evo rwd hinh 8
Lamborghini Huracán EVO RWD Spyder sở hữu phần mui xếp giống với những phiên bản Huracán Spyder khác. Phần mui này có thể đóng/mở trong vòng 17 giây ngay cả khi chiếc xe đang vận hành ở tốc độ 50km/h.
lamborghini ra mat phien ban mui tran cua huracan evo rwd hinh 9
Xe được trang bị phần cửa sổ sau tách rời so với phần mui, giúp người lái có thể mở tấm kính này để có thể tận hưởng những âm thanh đầy hấp dẫn phát ra từ khối động cơ V10 ngay cả khi đóng mui.
lamborghini ra mat phien ban mui tran cua huracan evo rwd hinh 10
Ở phiên bản EVO RWD Spyder, xe vẫn được trang bị động cơ V10 5.2 lít hút khí tự nhiên có khả năng tạo ra công suất cực đại 610 mã lực, ngang với Huracán LP610-4 trước đây. Sức mạnh vẫn được truyền đến bánh sau thông qua hộp số tự động ly hợp kép 7 cấp.
lamborghini ra mat phien ban mui tran cua huracan evo rwd hinh 11
So với phiên bản coupe, chiếc xe có khả năng tăng tốc từ 0-100 km/h trong vòng 3,5 giây (chậm hơn bản coupe 0,3 giây) và có thể đạt tốc độ tối đa lên tới 324 km/h.

lamborghini ra mat phien ban mui tran cua huracan evo rwd hinh 12
Theo công bố từ hãng, chiếc Huracán EVO RWD Spyder đầu tiên được bàn giao tới khách hàng dự kiến sẽ xuất hiện vào mùa hè năm 2020. Mức giá dự kiến tại thị trường châu Âu được công bố ở mức 175,838 Euro, mức giá cho thị trường Mỹ là 229,428 USD.',
	'short_description'=>'Sau khoảng 5 tháng kể từ ngày chiếc Lamborghini Huracán EVO RWD ra mắt cho tới nay, thương hiệu siêu xe Italy đã chính thức “trình làng” phiên bản mui trần của mẫu xe này đồng thời là mẫu xe với hệ dẫn động cầu sau thứ 4 trong dòng Huracán.',
        	'image_feature'=>'https://images.vov.vn/w800/uploaded/mgexs9y4vchrwhdtzaag/2020_05_09/lamborghini_huracan_evo_rwd_spyder_unveiled_3_OFOJ.jpg'],
        	
       
 
        ]);
    }
}
