function check() {
    let p_id = document.getElementById("p_id");
    // let title = document.getElementById("title");
    let name = document.getElementById("name");
    let sname = document.getElementById("surname");
    let addr = document.getElementById("address");
    let s_dist = document.getElementById("sub_dist");
    let dist = document.getElementById("district");
    // let province = document.getElementsByName("province");
    let p_code = document.getElementById("postcode");
    if (p_id.length != 13) {
        alert("โปรดกรอกให้ครบ 13 หลักเท่านั้น")
    }
    if (name.length < 2 && name.length > 20) {
        alert("โปรดกรอกชื่อ")
    }
    if (sname.length < 2 && sname.length > 20) {
        alert("โปรดกรอกนามสกุล")
    }
    if (addr.length < 5) {
        alert("โปรดกรอกทีั่อยู่โดยละเอียด")
    }
    if (s_dist.length < 2) {
        alert("โปรดกรอกแขวง")
    }
    if (dist.length < 2) {
        alert("โปรดกรอกเขต")
    }
    if (p_code.length != 5) {
        alert("โปรดกรอกรหัสไปรษณีย์ 5 หลัก")
    }
}