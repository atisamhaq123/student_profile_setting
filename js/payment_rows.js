function addPaymenRows(){

    let payments = [
        {date:"Oct 2, 2025", type:"Group", subject:"English", teacher:"Daniela C.", lessons:4, price:"40"},
        {date:"Aug 17, 2025", type:"1:1", subject:"English", teacher:"Connie", lessons:4, price:"59.99"},
        {date:"Aug 15, 2025", type:"1:1", subject:"English", teacher:"Priscilla", lessons:4, price:"79.99"},
        {date:"Jul 20, 2025", type:"1:1", subject:"English", teacher:"Regina", lessons:4, price:"109.99"},
        {date:"Jul 18, 2025", type:"Group", subject:"English", teacher:"Wendy", lessons:4, price:"49.99"},
        {date:"Jul 10, 2025", type:"Group", subject:"English", teacher:"Kristin", lessons:4, price:"99.99"},
        {date:"Jun 22, 2025", type:"1:1", subject:"English", teacher:"Esther", lessons:4, price:"89.99"},
        {date:"Jun 20, 2025", type:"Group", subject:"English", teacher:"Colleen", lessons:4, price:"69.99"},
        {date:"Jun 12, 2025", type:"1:1", subject:"English", teacher:"Courtney", lessons:4, price:"119.99"},
        {date:"Jun 11, 2025", type:"1:1", subject:"English", teacher:"Judith", lessons:4, price:"129.99"}
    ];

    let rows = "";

    $.each(payments, function(index, payment){

        rows += `
        <tr>
            <td>${payment.date}</td>
            <td>${payment.type}</td>
            <td>${payment.subject}</td>
            <td>${payment.teacher}</td>
            <td>${payment.lessons}</td>
            <td>$${payment.price}</td>
            <td><a href="#" class="payment_history_link">Get receipt</a></td>
        </tr>
        `;

    });
    console.log(rows);
    $("#payment_history_body").append(rows);
}